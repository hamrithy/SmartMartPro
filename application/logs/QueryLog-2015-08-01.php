SELECT `userid`, `username`, `usertype`
FROM `USERS`
WHERE `username` = 'admin'
AND `password` = '21232f297a57a5a743894a0e4a801fc3'
AND `active` = 1
 LIMIT 1 
 Execution Time:0.27640604972839

SELECT `userid`, `username`, `usertype`
FROM `USERS`
WHERE `username` = 'admin'
AND `password` = '21232f297a57a5a743894a0e4a801fc3'
AND `active` = 1
 LIMIT 1 
 Execution Time:0.4070520401001

SELECT `userid`, `username`, `usertype`
FROM `USERS`
WHERE `username` = 'admin'
AND `password` = '21232f297a57a5a743894a0e4a801fc3'
AND `active` = 1
 LIMIT 1 
 Execution Time:0.26590085029602

SELECT `userid`, `username`, `usertype`
FROM `USERS`
WHERE `username` = 'test'
AND `password` = '098f6bcd4621d373cade4e832627b4f6'
AND `active` = 1
 LIMIT 1 
 Execution Time:0.28400802612305

SELECT `userid`, `username`, `usertype`
FROM `USERS`
WHERE `username` = 'test'
AND `password` = '098f6bcd4621d373cade4e832627b4f6'
AND `active` = 1
 LIMIT 1 
 Execution Time:0.27075982093811

SELECT `userid`, `username`, `usertype`
FROM `USERS`
WHERE `username` = 'admin'
AND `password` = '21232f297a57a5a743894a0e4a801fc3'
AND `active` = 1
 LIMIT 1 
 Execution Time:0.26316714286804

SELECT `u`.`userid`, `u`.`username`, `r`.`name` AS `usertype`, `u`.`active`
FROM `USERS` `u`
JOIN `ROLES` `r` ON `r`.`roleid` = `u`.`usertype` 
 Execution Time:0.26420497894287

SELECT `u`.`userid`, `u`.`username`, `u`.`password`, `r`.`name` AS `usertype`, `u`.`active`
FROM `USERS` `u`
JOIN `ROLES` `r` ON `r`.`roleid` = `u`.`usertype`
WHERE `userid` = '1' 
 Execution Time:0.26788806915283

SELECT `u`.`userid`, `u`.`username`, `r`.`name` AS `usertype`, `u`.`active`
FROM `USERS` `u`
JOIN `ROLES` `r` ON `r`.`roleid` = `u`.`usertype` 
 Execution Time:0.29661798477173

SELECT `u`.`userid`, `u`.`username`, `r`.`name` AS `usertype`, `u`.`active`
FROM `USERS` `u`
JOIN `ROLES` `r` ON `r`.`roleid` = `u`.`usertype` 
 Execution Time:0.26306414604187

SELECT `u`.`userid`, `u`.`username`, `r`.`name` AS `usertype`, `u`.`active`
FROM `USERS` `u`
JOIN `ROLES` `r` ON `r`.`roleid` = `u`.`usertype` 
 Execution Time:0.2744288444519

SELECT `u`.`userid`, `u`.`username`, `r`.`name` AS `usertype`, `u`.`active`
FROM `USERS` `u`
JOIN `ROLES` `r` ON `r`.`roleid` = `u`.`usertype` 
 Execution Time:0.28486680984497

SELECT `u`.`userid`, `u`.`username`, `u`.`password`, `r`.`name` AS `usertype`, `u`.`active`
FROM `USERS` `u`
JOIN `ROLES` `r` ON `r`.`roleid` = `u`.`usertype`
WHERE `userid` = '1' 
 Execution Time:0.28885197639465

SELECT `u`.`userid`, `u`.`username`, `r`.`name` AS `usertype`, `u`.`active`
FROM `USERS` `u`
JOIN `ROLES` `r` ON `r`.`roleid` = `u`.`usertype` 
 Execution Time:0.26626420021057

SELECT `u`.`userid`, `u`.`username`, `u`.`password`, `r`.`name` AS `usertype`, `u`.`active`
FROM `USERS` `u`
JOIN `ROLES` `r` ON `r`.`roleid` = `u`.`usertype`
WHERE `userid` = '1' 
 Execution Time:0.26560497283936

