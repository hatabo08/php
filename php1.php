<?php
$products = [
  [
      "fruit"=>"りんご",
          "count"=>50,
          "price"=>110
  ],
  [
      "fruit"=>"みかん",
          "count"=>0,
          "price"=>80
  ],
  [
      "fruit"=>"バナナ",
      "count"=>30,
      "price"=>60
  ],
  [
      "fruit"=>"ぶどう",
      "count"=>5,
      "price"=>240
  ],
];
$high_price_count = 0;
$middle_price_count = 0;
$low_price_count = 0;
foreach($products as $product) {
  if ($product["count"] > 0) {
    echo $product["fruit"] . "は在庫がある。" . "<br>";
  }else{
    echo $product["fruit"] . "は在庫がない。" . "<br>";
  }
  
  if ($product["price"] >= 200) {
    $high_price_count++;
  }elseif($product["price"] >= 100){
     $middle_price_count++;
  }else{
    $low_price_count++;
  }
}
  echo "高価な商品は" . $high_price_count . "件、" . 
  "中価格な商品は" . $middle_price_count . "件、" . 
  "安価な商品は" . $low_price_count . "件あります。";
  
