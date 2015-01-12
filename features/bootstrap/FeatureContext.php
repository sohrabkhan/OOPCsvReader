<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    private $output;

    /** @Given /^I have a file named "([^"]*)"$/ */
    public function iHaveAFileNamed($file)
    {
        touch($file);
    }

    /** @When /^I run "([^"]*)"$/ */
    public function iRun($command)
    {
        exec($command, $output);
        $this->output = trim(implode("\n", $output));
    }

    /** @Then /^I should get:$/ */
    public function iShouldGet(PyStringNode $string)
    {
        if (preg_match_all('/' . (string)$string . '/', $this->output)) {
            throw new Exception(
                "Actual output is:\n" . $this->output
            );
        }
    }
}
