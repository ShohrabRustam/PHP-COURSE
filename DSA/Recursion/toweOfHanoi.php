<?php
// n is number of disk A B C is tower 1, 2, 3
function towerOfHanoi($n,$A,$B,$C){
// for 1 disk 
// move A to C using B 

//    for 2 disk  TOH(2,A,B,C)
//    TOH(1,A,C,B); because we transfer A to B
//  move disk A to C using B 
//  TOH (1,B,A,C) because we transfer B to C

//    for 3 disk  TOH(3,A,B,C)
//    TOH(2,A,C,B); because we transfer A to B aleady see how to move 2 disk previous 
//    move disk A to C using B  
//    TOH (2,B,A,C) because we transfer B to C aleady see how to move 2 disk like previous

//  Simmilarly 
        //    for n disk  TOH(n,A,B,C)
//    TOH(n-1,A,C,B); because we transfer A to B aleady see how to move 2 disk previous 
//    move disk A to C using B  
//    TOH (n-1,B,A,C) because we transfer B to C aleady see how to move 2 disk like previous
if($n>0){
    towerOfHanoi($n-1,$A,$C,$B);
    echo "$A  ->  $C <br><br>";
    towerOfHanoi($n-1,$B,$A,$C);

}
return 0;
}
towerOfHanoi(4,"Tower:A","Tower:B","Tower:C");
?>