<?php

return [
    'sections' => [

        'account' => [
            'title' => 'Account',
            'description' => 'You can update your account email and password by following the steps below. Changes are applied immediately after saving.',

            'step_1' => [
                'title' => 'Access the settings page',
                'description' => 'Click on the account menu (top right corner) and select the option ',
                'account_label' => 'Account',
            ],

            'step_2' => [
                'title' => 'Update your Email or Password',
                'description' => 'In the settings section, you will find the fields to change your email and password. After filling in the new information, click ',
                'save_label' => 'Save',
            ],

        ],

        'how_to_play' => [
            'title' => 'How to Place a Bet',
            'description' => 'In this section, you will learn how to create, edit, and remove your bet, as well as understand when it closes and how the system confirms the action.',

            'labels' => [
                'messages_examples' => 'Message Examples',
            ],

            'step_1' => [
                'title' => 'Create a Bet Before the Start',
                'description' => 'You can place a bet until the start of the match. To create a bet, click on the desired match and adjust the score using the buttons ',
                'mobile_hint' => 'Screenshot mobile - select match and adjust score',
                'desktop_hint' => 'Screenshot desktop - select match and adjust score',
            ],

            'step_2' => [
                'title' => 'Edit or Remove an Existing Bet',
                'description' => 'If you already have a saved score and want to change it, just adjust the values again and click save. If you want to remove the bet, click remove.',
                'save_label' => 'Save',
                'remove_label' => 'Remove',
                'mobile_hint' => 'Screenshot mobile - save / remove bet',
                'desktop_hint' => 'Screenshot desktop - save / remove bet',
            ],

            'step_3' => [
                'title' => 'Confirmation and Possible Errors',
                'description' => 'When saving or removing a bet, you will see a success or failure message. If an error occurs, please try again later.',
                'success_example' => 'Bet saved successfully',
                'error_example' => 'Unable to save now. Please try again.',
            ],
        ],

        'ranking' => [
            'title' => 'Ranking',
            'description' => 'The ranking is automatically updated based on validated picks. Below we explain how points are calculated and when the classification is updated.',

            'step_1' => [
                'title' => 'How points are calculated',
                'intro' => 'Each validated pick generates a score based on result accuracy:',

                'points' => [
                    ['label' => '7 points', 'description' => 'Exact score'],
                    ['label' => '5 points', 'description' => 'Winning team + goals of one team'],
                    ['label' => '3 points', 'description' => 'Correct winner or draw'],
                    ['label' => '2 points', 'description' => 'Goals of one team'],
                    ['label' => '0 points', 'description' => 'No correct prediction'],
                ],

                'example_title' => 'Practical example',
                'example' => [
                    'bet' => 'Pick',
                    'final_result' => 'Final Result',
                ],
            ],

            'step_2' => [
                'title' => 'When calculations are performed',
                'description' => 'Points are calculated automatically after the official match result validation. Once confirmed in the system, points are assigned and the ranking is updated.',

                'auto_update_title' => 'Automatic update',
                'auto_update_description' => 'The ranking may update immediately after match validation. If there is any delay, points will be adjusted automatically once the result is confirmed.',
            ],
        ],
    ],

    'ui' => [
        'guide_button' => 'Guide',
        'slideover' => [
            'heading' => 'Complete Guide',
            'description' => 'Sections with instructions on how to use the system and play the game.',
        ],
    ],
];
