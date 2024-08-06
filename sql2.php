<?php

/*
CREATE TABLE evaluations (
    respondent_id UUID PRIMARY KEY,   -- ID респондента
    department_id UUID,               -- ID департамента
    name VARCHAR(64),                 -- имя респондента
    bio LONGTEXT,                     -- биография респондента
    gender BOOLEAN,                   -- пол: true - мужчина, false - женщина
    value INTEGER                     -- Оценка
);
 */


/*
2. Оптимизация поиска по биографии:
Предложите метод оптимизации поиска по полю bio для точного совпадения биографии респондента с записью из другой базы
данных. Возможно, вам потребуется изменить структуру таблицы или предложить использование специализированных индексов
или технологий. Опишите ваше решение и предложите необходимые изменения в структуре таблицы.
 */

/*
1. Идеальный вариант когда можно получить id и bio из другой базы, мы тогда добавляем столбец external_bio_id, который
будет ссылаться на запись в другой базе, и поиск в другой базе выполнять по external_bio_id

CREATE TABLE evaluations (
    respondent_id UUID PRIMARY KEY,   -- ID респондента
    department_id UUID,               -- ID департамента
    name VARCHAR(64),                 -- имя респондента
    bio LONGTEXT,                     -- биография респондента
    external_bio_id UUID              -- ID из другой базы
    gender BOOLEAN,                   -- пол: true - мужчина, false - женщина
    value INTEGER                     -- Оценка
);


2. Другой вариант добавить полнотекстовый поиск
CREATE TABLE evaluations (
    respondent_id UUID PRIMARY KEY,   -- ID респондента
    department_id UUID,               -- ID департамента
    name VARCHAR(64),                 -- имя респондента
    bio LONGTEXT,                     -- биография респондента
    gender BOOLEAN,                   -- пол: true - мужчина, false - женщина
    value INTEGER                     -- Оценка
);

ALTER TABLE `evaluations` ADD FULLTEXT `bio` (`bio`);
 */