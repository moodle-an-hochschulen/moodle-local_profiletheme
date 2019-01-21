@local @local_profiletheme
Feature: Edit rules based on profile fields

  Background:
    Given the following custom user profile fields exist (local_profiletheme):
      | shortname     | name            | datatype | param1           |
      | checkboxfield | Checkbox field  | checkbox |                  |
      | menufield     | Menu field      | menu     | Opt1, Opt2, Opt3 |
      | textfield     | Text field      | text     |                  |
      | textareafield | Text area field | textarea |                  |
      | datefield     | Date field      | datetime |                  |
    And I log in as "admin"
    And I navigate to "Users > Accounts > Profile field based theme delivery" in site administration
    And I should not see "Date field"

  Scenario: Add, update and delete a checkbox field rule
    When I select "Checkbox field" from the "local_profiletheme_add" singleselect
    And "Checkbox field" "text" should exist in the "form.mform" "css_element"
    And I set the following fields to these values:
      | Match value             | Yes   |
      | the user will get theme | Clean |
    And I press "Save changes"
    And I navigate to "Users > Accounts > Profile field based theme delivery" in site administration
    Then the following fields match these values:
      | Match value             | Yes   |
      | the user will get theme | Clean |
    And I set the following fields to these values:
      | Match value             | No   |
      | the user will get theme | More |
    And I press "Save changes"
    And I navigate to "Users > Accounts > Profile field based theme delivery" in site administration
    And the following fields match these values:
      | Match value             | No   |
      | the user will get theme | More |
    And I set the field "Delete this rule" to "1"
    And I press "Save changes"
    And "Checkbox field" "text" should not exist in the "form.mform" "css_element"

  Scenario: Add update and delete a menu field rule
    When I select "Menu field" from the "local_profiletheme_add" singleselect
    And "Menu field" "text" should exist in the "form.mform" "css_element"
    And I set the following fields to these values:
      | Match value             | Opt2  |
      | the user will get theme | Clean |
    And I press "Save changes"
    And I navigate to "Users > Accounts > Profile field based theme delivery" in site administration
    Then "Menu field" "text" should exist in the "form.mform" "css_element"
    And the following fields match these values:
      | Match value             | Opt2  |
      | the user will get theme | Clean |
    And I set the following fields to these values:
      | Match value             | Opt3 |
      | the user will get theme | More |
    And I press "Save changes"
    And I navigate to "Users > Accounts > Profile field based theme delivery" in site administration
    And the following fields match these values:
      | Match value             | Opt3 |
      | the user will get theme | More |
    And I set the field "Delete this rule" to "1"
    And I press "Save changes"
    And "Menu field" "text" should not exist in the "form.mform" "css_element"

  Scenario: Add update and delete a text field rule
    When I select "Text field" from the "local_profiletheme_add" singleselect
    And "Text field" "text" should exist in the "form.mform" "css_element"
    And I set the following fields to these values:
      | Match value             | testing |
      | Match type              | Matches |
      | the user will get theme | Clean   |
    And I press "Save changes"
    And I navigate to "Users > Accounts > Profile field based theme delivery" in site administration
    Then "Text field" "text" should exist in the "form.mform" "css_element"
    And the following fields match these values:
      | Match value             | testing |
      | Match type              | Matches |
      | the user will get theme | Clean   |
    And I set the following fields to these values:
      | Match value             | testing again |
      | Match type              | Contains      |
      | the user will get theme | More          |
    And I press "Save changes"
    And I navigate to "Users > Accounts > Profile field based theme delivery" in site administration
    And the following fields match these values:
      | Match value             | testing again |
      | Match type              | Contains      |
      | the user will get theme | More          |
    And I set the field "Delete this rule" to "1"
    And I press "Save changes"
    And "Text field" "text" should not exist in the "form.mform" "css_element"
