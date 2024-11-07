<?php function team_skills_meta_box()
{
    add_meta_box(
        'team_skills_meta_box', // Meta box ID
        'Skills',               // Meta box Title
        'team_skills_meta_box_callback', // Callback function
        'team',                 // Post type
        'normal',               // Context
        'high'                  // Priority
    );
}
add_action('add_meta_boxes', 'team_skills_meta_box');

function team_skills_meta_box_callback($post)
{
    $skills = get_post_meta($post->ID, 'skills', true);
    wp_nonce_field('team_skills_meta_box_nonce', 'team_skills_nonce');

    echo '<div id="team-skills-wrapper">';
    if ($skills && is_array($skills)) {
        foreach ($skills as $index => $skill) {
            ?>
            <div class="skill-item" style="margin-bottom: 20px;">
                <label>Skill Name:</label>
                <input type="text" name="skills[<?php echo $index; ?>][name]" value="<?php echo esc_attr($skill['name']); ?>"
                    style="width: 100%;" />
                <label>Skill Description:</label>
                <textarea name="skills[<?php echo $index; ?>][description]"
                    style="width: 100%;"><?php echo esc_textarea($skill['description']); ?></textarea>
                <button type="button" class="remove-skill">Remove Skill</button>
            </div>
            <?php
        }
    }
    echo '</div>';
    echo '<button type="button" id="add-skill">Add Skill</button>';
}

function save_team_skills($post_id)
{
    if (!isset($_POST['team_skills_nonce']) || !wp_verify_nonce($_POST['team_skills_nonce'], 'team_skills_meta_box_nonce')) {
        return $post_id;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    if ('team' !== $_POST['post_type'] || !current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
    $skills = isset($_POST['skills']) ? $_POST['skills'] : array();
    update_post_meta($post_id, 'skills', $skills);
}
add_action('save_post', 'save_team_skills');