#!/usr/bin/node

// oldstring = 'this is some text rest';
// newstring = 'this is some text xxxpatrr rest';

oldstring = 'this is some xxxpatrr text rest xxxpattr';
newstring = 'this is some xxxpatrr text xxxpatrr rest xxxpattr';

var index = 0;

do {
    // find first occurence of pattern
    index = newstring.indexOf('xxxpatrr', index);
    // take the part of the string from the beginning until the end of the pattern
    // and check if you can find it in the old string
    // if you can go to the next occurence of the pattern until you find one
    // that doesn't exist in the old string.
    index += 'xxxpatrr'.length;
} while (oldstring.indexOf(newstring.substr(0, index)) != -1);
res = newstring.substr(0,index-'xxxpatrr'.length) + "[yay]" + newstring.substr(index,newstring.length);

console.log(res);