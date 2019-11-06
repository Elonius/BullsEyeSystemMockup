drop table if exists Items;

-- BullsEye Items table
create table Items
(
	itemID int not null AUTO_INCREMENT,
	itemName varchar(50) not null,
	itemLocation int not null,
	primary key (itemID)
);

-- BullsEye Items
insert into items values(1, "Hockey Stick", 2);
insert into items values(1, "Puck", 2);
insert into items values(1, "Bow", 4);