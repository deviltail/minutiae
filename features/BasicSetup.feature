Feature: Basic application setup

  As a developer
  In order to be sure I'm making a sustainable application
  I want to be able to test the application and remove default configuration

  Scenario: No mention of Laravel

    Given I am on the homepage
    Then I should not see "Laravel"