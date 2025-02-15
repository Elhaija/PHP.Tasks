<?php
function checkVotingEligibility($age) {
    return ($age >= 18) ? "is eligible to vote" : "is not eligible to vote";
}
$age = 15;
echo $age . " " . checkVotingEligibility($age);
?>