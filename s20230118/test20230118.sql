CREATE TABLE `db_kai`.`students` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(32) NOT NULL,
    `age` INT(10) NOT NULL,
    `tel` VARCHAR(32) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- insert
INSERT INTO
    `students` (`id`, `name`, `age`, `tel`)
VALUES
    (NULL, 'bob', '50', '0922-222-222'),
    (NULL, 'cat', '40', '0933-333-333'),
    (NULL, 'dog', '60', '0944-444-444'),
    (NULL, 'good', '60', '0944-444-444');

-- update
UPDATE
    `students`
SET
    `age` = '100'
WHERE
    `students`.`id` = 2;

-- del
DELETE FROM
    students
WHERE
    `students`.`id` = 4;

-- select
SELECT
    *
FROM
    `students`
WHERE
    age >= 39;