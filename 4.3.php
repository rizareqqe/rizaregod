<?php

function mostRecent(string $text): string
{

 $words = array_filter(explode(' ', $text));


 if (empty($words)) {
  return '';
 }


 $wordCounts = array_count_values($words);


 arsort($wordCounts);


 $mostCommonWordCount = reset($wordCounts);


 $mostCommonWords = array_keys(array_filter($wordCounts, function ($count) use ($mostCommonWordCount) {
  return $count === $mostCommonWordCount;
 }));


 return implode(' ', $mostCommonWords);
}


echo mostRecent('aaaaaa ggggh j jjj  gggggggg 12233344 1224523 hhhhh hhhhh hhhhh hhhhh'); // hhhhh