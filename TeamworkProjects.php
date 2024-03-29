<?php

class Team
{
    private $teamLead;
    private $teamName;
    private $membersList = [];

    public function __construct($teamLead, $teamName, $membersList)
    {
        $this->teamLead = $teamLead;
        $this->teamName = $teamName;
        $this->membersList = $membersList;
    }

    public function addMember($member)
    {
        $this->membersList[] = $member;
    }

    public function getMembers()
    {
        return $this->membersList;
    }

    public function getTeamLead()
    {
        return $this->teamLead;
    }

    public function getTeamName()
    {
        return $this->teamName;
    }
}

$teamsList = [];
$n = readline();
for ($i = 0; $i < $n; $i++) {
    $input = explode("-", readline());
    $teamLead = $input[0];
    $teamName = $input[1];

    // Check if a team has been created
    $validateTeamWasCreated = false;
    foreach ($teamsList as $teams) {
        $currentTeamName = $teams->getTeamName();

        if ($currentTeamName == $teamName) {
            $validateTeamWasCreated = true;
            echo "Team $currentTeamName was already created!" . PHP_EOL;
            break;
        }
    }

    // Check if user has already created a team
    $validateUserCreatedATeam = false;
    foreach ($teamsList as $teams) {
        $currentTeamLead = $teams->getTeamLead();

        if ($currentTeamLead == $teamLead) {
            $validateUserCreatedATeam = true;
            echo "$currentTeamLead cannot create another team!" . PHP_EOL;
            break;
        }
    }

    // Creates a new team + adds the team to the list of teams
    if ($validateTeamWasCreated == false && $validateUserCreatedATeam == false) {
        $team = new Team($teamLead, $teamName, null);
        $team->addMember($teamLead);
        $teamsList[] = $team;
        echo "Team $teamName has been created by $teamLead!" . PHP_EOL;
    }

} // END for-loop

//var_dump($teamsList);

// --- --- --- --- --- Part 2 --- --- --- --- ---

while (true) {
    $input = readline();
    if ($input == "end of assignment") {
        break;
    }
    $inputArr = explode("->", $input);
    $user = $inputArr[0];
    $teamName = $inputArr[1];

    // Check if a team exists
    $validateTeamExists = false;
    foreach ($teamsList as $teams) {
        $currentTeamName = $teams->getTeamName();

        if ($currentTeamName == $teamName) {

            $validateTeamExists = true;
        }
    }
    if ($validateTeamExists == false) {
        echo "Team $teamName does not exist!" . PHP_EOL;
    }

    // Check if member is already in a team
    $validateMemberInAnotherTeam = false;
    $endValidateMemberInAnotherTeam = false;
    if ($validateTeamExists == true) {
        foreach ($teamsList as $teams) {
            if ($endValidateMemberInAnotherTeam == true) {
                break;
            }

            $currentMembersList = $teams->getMembers();
            //echo "inside FOREACH";

            for ($j = 0; $j < count($currentMembersList); $j++) {
                if ($user == $currentMembersList[$j]) {
                    $validateMemberInAnotherTeam = true;
                    echo "Member $user cannot join team $teamName!" . PHP_EOL;
                    $endValidateMemberInAnotherTeam = true;
                    break;
                }
            }

        }
    }

    //echo "WHY JOIN";
    //var_dump($validateMemberInAnotherTeam);

    // Member joins a team
    if ($validateTeamExists == true && $validateMemberInAnotherTeam == false) {
        foreach ($teamsList as $teams) {
            $currentTeamName = $teams->getTeamName();

            if ($currentTeamName == $teamName) {
                $teams->addMember($user);
                //echo "Member $user joined team $teamName!" . PHP_EOL;
                break;
            }
        }
    }

} // END while-loop

// --- --- --- --- --- Part 3 --- --- --- --- ---

usort($teamsList, function ($a, $b) use ($teamsList) {
    if ($teamsList[count($a->getMembers())] < $teamsList[count($b->getMembers())]) return 1;
    else if ($teamsList[count($a->getMembers())] > $teamsList[count($b->getMembers())]) return -1;
    else return strcmp($a->getTeamName(), $b->getTeamName());
});

$teamsToDisband = [];
foreach ($teamsList as $teams) {
    $currentTeamName = $teams->getTeamName();
    $currentMembersList = $teams->getMembers();

    if (count($currentMembersList) <= 1) {
        $teamsToDisband[] = $currentTeamName;
        continue;
    }

    //var_dump($currentMembersList);
    echo "{$teams->getTeamName()}" . PHP_EOL;
    echo "- {$teams->getTeamLead()}" . PHP_EOL;
    for ($j = 1; $j < count($currentMembersList); $j++) {
        echo "-- " . $currentMembersList[$j] . PHP_EOL;
    }
}

// Teams to disband
echo "Teams to disband:" . PHP_EOL;
foreach ($teamsToDisband as $team) {
    echo $team . PHP_EOL;
}