-- Project Name : K2o_blog
-- Date/Time    : 2017/06/10 17:40:56
-- Author       : katsuya
-- RDBMS Type   : MySQL
-- Application  : A5:SQL Mk-2

create database k2o_blog default character set utf8;

drop table if exists k2o_blog.filiming_map cascade;

create table k2o_blog.filming_map (
  portfolio_id INT UNSIGNED not null comment 'ポートフォリオID'
  , link_id INT UNSIGNED not null comment 'リンクID'
  , constraint filiming_map_PKC primary key (portfolio_id,link_id)
) comment '撮影場所リンクマップ' ;

drop table if exists k2o_blog.link_map cascade;

create table k2o_blog.link_map (
  portfolio_id INT UNSIGNED not null comment 'ポートフォリオID'
  , link_id INT UNSIGNED not null comment 'リンクID'
  , constraint link_map_PKC primary key (portfolio_id,link_id)
) comment '関連リンクマップ' ;

drop table if exists k2o_blog.section_map cascade;

create table k2o_blog.section_map (
  portfolio_id INT UNSIGNED not null comment 'ポートフォリオID'
  , section_id INT UNSIGNED not null comment 'セクションID'
  , constraint section_map_PKC primary key (portfolio_id,section_id)
) comment 'セクションマップ' ;

drop table if exists k2o_blog.section cascade;

create table k2o_blog.section (
  section_id INT UNSIGNED not null auto_increment comment 'セクションID'
  , section_title VARCHAR(255) not null comment 'セクションタイトル'
  , section_description TEXT not null comment 'セクション説明'
  , section_image VARCHAR(255) comment 'セクションイメージ'
  , constraint section_PKC primary key (section_id)
) comment 'セクション' ;

drop table if exists k2o_blog.link cascade;

create table k2o_blog.link (
  link_id INT UNSIGNED not null auto_increment comment 'リンクID'
  , link_name VARCHAR(255) not null comment 'リンク名'
  , link_url TEXT not null comment 'リンクURL'
  , constraint link_PKC primary key (link_id)
) comment 'リンク' ;

drop table if exists k2o_blog.portfolio cascade;

create table k2o_blog.portfolio (
  portfolio_id INT UNSIGNED not null auto_increment comment 'ポートフォリオID'
  , page_title VARCHAR(255) not null comment 'ページタイトル'
  , page_description VARCHAR(255) not null comment 'ページ説明'
  , page_abstract VARCHAR(255) not null comment 'ページ概要'
  , page_thumbnail VARCHAR(255) comment 'ページサムネイル ファイル名'
  , page_subtitle VARCHAR(255) not null comment 'ページサブタイトル'
  , page_content TEXT not null comment 'ページコンテンツ'
  , filming_title VARCHAR(255) comment '撮影場所'
  , filming_address VARCHAR(255) comment '撮影場所住所'
  , filming_description VARCHAR(255) comment '撮影場所説明'
  , filming_location TEXT comment '撮影場所地図 Googleマップのiframe'
  , constraint portfolio_PKC primary key (portfolio_id)
) comment 'ポートフォリオ' ;

alter table k2o_blog.filming_map
  add constraint filiming_map_FK1 foreign key (link_id) references k2o_blog.link(link_id);

alter table k2o_blog.filming_map
  add constraint filiming_map_FK2 foreign key (portfolio_id) references k2o_blog.portfolio(portfolio_id);

alter table k2o_blog.link_map
  add constraint link_map_FK1 foreign key (link_id) references k2o_blog.link(link_id);

alter table k2o_blog.link_map
  add constraint link_map_FK2 foreign key (portfolio_id) references k2o_blog.portfolio(portfolio_id);

alter table k2o_blog.section_map
  add constraint section_map_FK1 foreign key (section_id) references k2o_blog.section(section_id);

alter table k2o_blog.section_map
  add constraint section_map_FK2 foreign key (portfolio_id) references k2o_blog.portfolio(portfolio_id);
