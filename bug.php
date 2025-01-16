function foo(array $arr): array {
    if (empty($arr)) {
        return [];
    }
    $result = [];
    foreach ($arr as $value) {
        if (is_array($value)) {
            $result = array_merge($result, foo($value));
        } else {
            $result[] = $value;
        }
    }
    return $result;
}

//Example Usage:
$arr = [1, [2, [3, 4], 5], 6];
echo json_encode(foo($arr)); // Output: [1,2,3,4,5,6]

$arr2 = [1,2,3,[4,5],6,[7,[8,9]]];
echo json_encode(foo($arr2)); //Output: [1,2,3,4,5,6,7,8,9]