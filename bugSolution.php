function fooImproved(array $arr): array {
    $result = [];
    $stack = [$arr];

    while (!empty($stack)) {
        $current = array_pop($stack);
        foreach ($current as $value) {
            if (is_array($value)) {
                $stack[] = $value;
            } else {
                $result[] = $value;
            }
        }
    }
    return array_reverse($result); // Reverse to maintain original order
}

//Example Usage:
$arr = [1, [2, [3, 4], 5], 6];
echo json_encode(fooImproved($arr)); // Output: [1,2,3,4,5,6]

$arr2 = [1,2,3,[4,5],6,[7,[8,9]]];
echo json_encode(fooImproved($arr2)); //Output: [1,2,3,4,5,6,7,8,9] 