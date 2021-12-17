<?php
// Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque debitis sed quo commodi temporibus amet corrupti architecto, laudantium, cupiditate veritatis labore repudiandae quam ex natus ratione. Quo eaque ipsum nostrum?
Aspernatur saepe non temporibus. Magnam dolorem impedit nesciunt libero ea animi voluptatibus commodi voluptas consequatur, beatae doloremque ullam fuga voluptates earum numquam sapiente sit culpa sed atque nam aut. Voluptate?
Perferendis dolore nisi nesciunt deserunt quam, quidem cumque voluptates maiores temporibus blanditiis placeat veniam quis in tenetur adipisci necessitatibus dignissimos aspernatur accusantium magni aperiam. Quam autem reiciendis architecto dolore aperiam?";

$array = explode('.', $paragraph);
echo 'IL MIO ARRAY: ';
print_r($array);
echo '<br>';

for ($i = 0; $i < count($array); $i++) {
    echo '<br />' . $array[$i];
}
