<?php
// PHP - Random Quote Generator
$quotes=[
    [
       "quote"=>"The greatest glory in living lies not in never falling, but in rising every time we fall.",
       "source"=>"Nelson Mandela"
       
    ],
    [
        "quote"=>"The way to get started is to quit talking and begin doing.",
        "source"=>"Walt Disney"
    ],
    [
        "quote"=>"Life is what happens when you're busy making other plans.",
        "source"=>"John Lenon",
        "year"=>"1983"
    ],
    [
        "quote"=>"Keep your friends cose and your enemies closer",
        "source"=>"Robert Deniro",
        "citation"=>"The GodFather",
        "year"=>"1972",
        "genre"=>"Thriller"
    ],
    [
        "quote"=>"I'll be back",
        "source"=>"Arnold Schwarzenegger",
        "citation"=>"The Terminator",
        "year"=>"1984",
        "genre"=>"Action"
    ]
    ];




// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($array){
    $randomNum=rand(0,count($array)-1);
    return $array[$randomNum];
    
}
function randomColor(){
    $colors=["red","green","blue","pink","grey","purple"];
    $randnum=rand(0,count($colors)-1);
    return $colors[$randnum];

}


// Create the printQuote funtion and name it printQuote
function printQuote($array){
  $empty="";
  $result= getRandomQuote($array);
  $empty.="<p class=quote>".$result["quote"]."</p>";
  $empty.="<p class=source>".$result["source"]."</p>";
  if(isset($result["citation"])){
    $empty.="<span class=citation>".$result["citation"]."</span>";
  }
  if(isset($result["year"])){
      $empty.="<span class=year>".$result["year"]."</span>";
  }
  if(isset($result["genre"])){
      $empty.="<span class=citation>".$result["genre"]."</span>";
  }

 
  return $empty;
}

?>