(function ($) {
    $(document).ready(function () {
        const controlId = 'team_repeater_setting';

        // Load existing data on initialization
        wp.customize(controlId, function (value) {
            value.bind(function (newValue) {
                // Parse the saved JSON
                const data = JSON.parse(newValue || '[]');
                const $list = $('.team-repeater-list');
                $list.empty(); // Clear existing items

                // Populate the list with saved data
                data.forEach((item, index) => {
                    const newItem = `
                        <li class="team-repeater-item">
                            <h3>Team #${index + 1}</h3>
                            <input type="text" class="team-name" value="${item.name || ''}" placeholder="Name" />
                            <input type="text" class="team-designation" value="${item.designation || ''}" placeholder="Designation" />
                            <input type="text" class="team-image" value="${item.image || ''}" placeholder="Image URL" />
                            <input type="text" class="team-facebook" value="${item.facebook || ''}" placeholder="Facebook URL" />
                            <input type="text" class="team-twitter" value="${item.twitter || ''}" placeholder="Twitter URL" />
                            <input type="text" class="team-instagram" value="${item.instagram || ''}" placeholder="Instagram URL" />
                            <input type="text" class="team-dribbble" value="${item.dribbble || ''}" placeholder="Dribbble URL" />
                            <button type="button" class="button remove-team-member">Remove</button>
                        </li>
                    `;
                    $list.append(newItem);
                });
            });
        });

        // Add Team Member
        $(document).on('click', '.add-team-member', function () {
            let $list = $(this).siblings('.team-repeater-list');
            let index = $list.children('li').length;
            let newItem = `
                <li class="team-repeater-item">
                    <h3>Team #${index + 1}</h3>
                    <input type="text" class="team-name" placeholder="Name" />
                    <input type="text" class="team-designation" placeholder="Designation" />
                    <input type="text" class="team-image" placeholder="Image URL" />
                    <input type="text" class="team-facebook" placeholder="Facebook URL" />
                    <input type="text" class="team-twitter" placeholder="Twitter URL" />
                    <input type="text" class="team-instagram" placeholder="Instagram URL" />
                    <input type="text" class="team-dribbble" placeholder="Dribbble URL" />
                    <button type="button" class="button remove-team-member">Remove</button>
                </li>
            `;
            $list.append(newItem);
        });

        // Remove Team Member
        $(document).on('click', '.remove-team-member', function () {
            $(this).closest('li').remove();
        });

        // Save Repeater Data
        $(document).on('change', '.team-repeater-item input', function () {
            let data = [];
            $('.team-repeater-list .team-repeater-item').each(function () {
                let item = {
                    name: $(this).find('.team-name').val(),
                    designation: $(this).find('.team-designation').val(),
                    image: $(this).find('.team-image').val(),
                    facebook: $(this).find('.team-facebook').val(),
                    twitter: $(this).find('.team-twitter').val(),
                    instagram: $(this).find('.team-instagram').val(),
                    dribbble: $(this).find('.team-dribbble').val(),
                };
                data.push(item);
            });
            wp.customize(controlId).set(JSON.stringify(data));
        });
    });
})(jQuery);
