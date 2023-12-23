drop table if exists friends;
CREATE TABLE friends (
    id    INTEGER PRIMARY KEY
                  NOT NULL
                  DEFAULT auto_increment,
    fname TEXT,
    lname TEXT
);

insert into friends 
    (`fname`, `lname`)
values 
    ('Rahul', 'Mohan'), 
    ('Pranav', 'Kumar');
