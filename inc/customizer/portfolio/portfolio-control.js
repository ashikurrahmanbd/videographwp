(function($) {
    $(document).ready(function() {
        const container = $('.portfolio-repeater');
        const template = $('.portfolio-template').html();

        // Add item
        container.on('click', '.add-portfolio-item', function() {
            container.find('.portfolio-items').append(template);
        });

        // Remove item
        container.on('click', '.remove-portfolio-item', function() {
            $(this).closest('.portfolio-item').remove();
            updatePortfolioData();
        });

        // Show/Hide fields based on Portfolio Type
        container.on('change', '.portfolio-type', function() {
            const type = $(this).val();
            const wideFields = $(this).closest('.portfolio-item').find('.portfolio-wide-fields');
            if (type === 'wide') {
                wideFields.removeClass('hidden');
            } else {
                wideFields.addClass('hidden');
            }
        });

        // Initialize the visibility of wide fields when the page loads
        container.find('.portfolio-type').each(function() {
            if ($(this).val() === 'wide') {
                $(this).closest('.portfolio-item').find('.portfolio-wide-fields').removeClass('hidden');
            } else {
                $(this).closest('.portfolio-item').find('.portfolio-wide-fields').addClass('hidden');
            }
        });

        // Update data on change
        container.on('input change', '.portfolio-item input, .portfolio-item select', function() {
            updatePortfolioData();
        });

        // Update the hidden textarea with JSON data
        function updatePortfolioData() {
            const data = [];
            container.find('.portfolio-item').each(function() {
                const item = {
                    thumbnail: $(this).find('.portfolio-thumbnail').val(),
                    video: $(this).find('.portfolio-video').val(),
                    type: $(this).find('.portfolio-type').val(),
                    heading: $(this).find('.portfolio-heading').val(),
                    categories: $(this).find('.portfolio-categories').val()
                };
                data.push(item);
            });
            container.find('.portfolio-repeater-data').val(JSON.stringify(data)).trigger('change');
        }
    });
})(jQuery);
