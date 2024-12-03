jQuery(document).ready(function ($) {
    $(document).on('click', '.add-hero-repeater-item', function () {
        var $control = $(this).closest('.customize-control'),
            template = `
                <li class="hero-repeater-item">
                    <input type="text" class="hero-image" placeholder="Hero Image URL">
                    <input type="text" class="hero-heading" placeholder="Hero Heading">
                    <input type="text" class="hero-subheading" placeholder="Hero Subheading">
                    <input type="text" class="hero-cta-text" placeholder="CTA Text">
                    <input type="url" class="hero-cta-link" placeholder="CTA Link">
                    <button type="button" class="button remove-hero-repeater-item">Remove</button>
                </li>`;
        $control.find('.hero-repeater-items').append(template);
        updateHeroRepeater($control);
    });

    $(document).on('click', '.remove-hero-repeater-item', function () {
        var $control = $(this).closest('.customize-control');
        $(this).closest('.hero-repeater-item').remove();
        updateHeroRepeater($control);
    });

    $(document).on('input', '.hero-repeater-item input', function () {
        var $control = $(this).closest('.customize-control');
        updateHeroRepeater($control);
    });

    function updateHeroRepeater($control) {
        var items = [];
        $control.find('.hero-repeater-item').each(function () {
            var item = {
                hero_image: $(this).find('.hero-image').val(),
                hero_heading: $(this).find('.hero-heading').val(),
                hero_subheading: $(this).find('.hero-subheading').val(),
                hero_cta_text: $(this).find('.hero-cta-text').val(),
                hero_cta_link: $(this).find('.hero-cta-link').val(),
            };
            items.push(item);
        });
        $control.find('.hero-repeater-collection').val(JSON.stringify(items)).trigger('change');
    }
});
