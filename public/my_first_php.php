<?php

$greeting = 'Hello';

$name = 'James';

$message = $greeting . ' ' . $name;

echo $message;

$message = "{$greeting} {$name}";

var_dump($message);

$names = [
'james',
'kate',
'paul'
];

echo 'shut up ' . $names[1];

echo ' I have ' . count($names) . ' names';

$names[] = 'Boris';

var_dump($names);

foreach ($names as $studentNames) {
echo "{$studentNames}, ";
}

$student = [
'first_name' => 'James',
'last_name' => 'Canning',
'gender' => 'M'
];

echo "<p>{$student['first_name']}</p>";

$student['age'] = 31;

echo "you just added the age of " . $student['age'] . " now the full data is " . $student['first_name'] . ' ' . $student['last_name'] . ' ' . $student['gender'] . ' ' . $student['age'] ;

var_dump($student);

$states = ['AK', 'MA', 'TS', 'WY'];

foreach ($states as $stateName) {
echo "{$stateName}<br>";
}

echo "<br>";

foreach ($student as $key => $value) {
    echo "Student {$key} is {$value}<br>";
}

?>





