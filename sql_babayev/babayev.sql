CREATE database Store;

CREATE TABLE myStore(
Sku integer not null  UNIQUE,
given_name  varchar(70),
price double(5,2),
Typo Varchar(70),
Size integer,
Height integer,
Width integer,
longth integer,
Weigh integer,
primary key(Sku)
);

