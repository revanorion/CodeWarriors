/*==============================================================*/
/* Database name:  RESIDENCY                                    */
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     12/4/2016 7:56:53 PM                         */
/*==============================================================*/


drop database if exists RESIDENCY;

/*==============================================================*/
/* Database: RESIDENCY                                          */
/*==============================================================*/
create database RESIDENCY;

use RESIDENCY;

/*==============================================================*/
/* Table: CLAIMING_RESIDENCY                                    */
/*==============================================================*/
create table CLAIMING_RESIDENCY
(
   CLAIMING_RESIDENCY_SEQ int not null auto_increment,
   SUPPORTING_DOCUMENTS_SEQ int,
   DEMONSTRATE_RESIDENCY_SEQ int,
   PERSON_NAME          varchar(200),
   CLAIMANT_RELATIONSHIP varchar(100),
   ADDRESS              varchar(200),
   PHONE_NUMBER         varchar(50),
   RESIDENCY_DATE       datetime,
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (CLAIMING_RESIDENCY_SEQ)
);

/*==============================================================*/
/* Table: DEMONSTRATE_RESIDENCY                                 */
/*==============================================================*/
create table DEMONSTRATE_RESIDENCY
(
   DEMONSTRATE_RESIDENCY_SEQ int not null auto_increment,
   CODE                 varchar(20),
   DESCRIPTION          varchar(200),
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (DEMONSTRATE_RESIDENCY_SEQ)
);

/*==============================================================*/
/* Table: EVIDENCE_OF_RESIDENCY                                 */
/*==============================================================*/
create table EVIDENCE_OF_RESIDENCY
(
   EVIDENCE_OF_RESIDENCY_SEQ int not null auto_increment,
   CODE                 varchar(20),
   DESCRIPTION          varchar(200),
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (EVIDENCE_OF_RESIDENCY_SEQ)
);

/*==============================================================*/
/* Table: NON_CITIZEN                                           */
/*==============================================================*/
create table NON_CITIZEN
(
   NON_CITIZEN_SEQ      int not null auto_increment,
   ALIEN_REGISTRATION_NUMBER numeric(10,0) not null,
   ISSUE_DATE           datetime,
   VISA_CATEGORY        varchar(20),
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (NON_CITIZEN_SEQ)
);

/*==============================================================*/
/* Table: NON_RESIDENT                                          */
/*==============================================================*/
create table NON_RESIDENT
(
   NON_RESIDENT_SEQ     int not null auto_increment,
   SIGNATURE            varchar(200) not null,
   DATE                 datetime not null,
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (NON_RESIDENT_SEQ)
);

/*==============================================================*/
/* Table: QUALIFICATION                                         */
/*==============================================================*/
create table QUALIFICATION
(
   QUALIFICATION_SEQ    int not null auto_increment,
   CODE                 varchar(20),
   DESCRIPTION          varchar(200),
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (QUALIFICATION_SEQ)
);

/*==============================================================*/
/* Table: QUALIFICATION_EXCEPTION                               */
/*==============================================================*/
create table QUALIFICATION_EXCEPTION
(
   QUALIFICATION_SEQ    int,
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime
);

/*==============================================================*/
/* Table: RESIDENCY_DECLARATION                                 */
/*==============================================================*/
create table RESIDENCY_DECLARATION
(
   RESIDENCY_DECLARATION_SEQ int not null auto_increment,
   STUDENT_NAME         varchar(200),
   CLAIMANT_NAME        varchar(200),
   SIGNATURE            varchar(200) not null,
   DATE                 datetime not null,
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (RESIDENCY_DECLARATION_SEQ)
);

/*==============================================================*/
/* Table: STATUS                                                */
/*==============================================================*/
create table STATUS
(
   STATUS_SEQ           int not null auto_increment,
   CODE                 varchar(15),
   DESCRIPTION          varchar(200),
   primary key (STATUS_SEQ)
);

/*==============================================================*/
/* Table: STUDENT                                               */
/*==============================================================*/
create table STUDENT
(
   STUDENT_SEQ          int not null auto_increment,
   STUDENT_TYPE_SEQ     int,
   NON_CITIZEN_SEQ      int,
   NON_RESIDENT_SEQ     int,
   STUDENT_NAME         varchar(40),
   Z_NUMBER             numeric(8,0),
   BIRTHDAY             datetime,
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (STUDENT_SEQ)
);

/*==============================================================*/
/* Table: STUDENT_RESIDENCY                                     */
/*==============================================================*/
create table STUDENT_RESIDENCY
(
   STUDENT_RESIDENCY_SEQ int not null auto_increment,
   CLAIMING_RESIDENCY_SEQ int,
   STUDENT_SEQ          int,
   USER_SEQ             int,
   RESIDENCY_DECLARATION_SEQ int,
   STATUS_SEQ           int,
   EVIDENCE_OF_RESIDENCY_SEQ int,
   YEAR                 smallint,
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (STUDENT_RESIDENCY_SEQ)
);

/*==============================================================*/
/* Table: STUDENT_TYPE                                          */
/*==============================================================*/
create table STUDENT_TYPE
(
   STUDENT_TYPE_SEQ     int not null auto_increment,
   CODE                 varchar(20),
   DESCRIPTION          varchar(200),
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (STUDENT_TYPE_SEQ)
);

/*==============================================================*/
/* Table: SUPPORTING_DOCUMENTS                                  */
/*==============================================================*/
create table SUPPORTING_DOCUMENTS
(
   SUPPORTING_DOCUMENTS_SEQ int not null auto_increment,
   VOTER_REGISTRATION   varchar(50),
   VOTER_ISSUE_DATE     datetime,
   DRIVERS_LICENSE      varchar(50),
   DRIVERS_ISSUE_DATE   datetime,
   DRIVERS_CURRENT_DATE datetime,
   STATE_ID             varchar(50),
   STATE_ISSUE_DATE     datetime,
   STATE_CURRENT_DATE   datetime,
   VEHICLE_REGISTRATION varchar(50),
   VEHICLE_ISSUE_DATE   datetime,
   VEHICLE_CURRENT_DATE datetime,
   PERMANENT_HOME       smallint,
   HOMESTEAD_EXEMPTION  smallint,
   HIGHSCHOOL_OFFICIAL_TRANSCRIPT smallint,
   HIGHSCHOOL_DATES_ATTENDED varchar(50),
   HIGHSCHOOL_GRADUATION datetime,
   FULLTIME_EMPLOYMENT  smallint,
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (SUPPORTING_DOCUMENTS_SEQ)
);

/*==============================================================*/
/* Table: UPLOADED_DOCUMENTS                                    */
/*==============================================================*/
create table UPLOADED_DOCUMENTS
(
   UPLOADED_DOCUMENTS_SEQ numeric(10,0) not null,
   FILE_PATH            char(10),
   primary key (UPLOADED_DOCUMENTS_SEQ)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   USER_SEQ             int not null auto_increment,
   USER_ROLE_SEQ        int,
   FIRST_NAME           varchar(50),
   LAST_NAME            varchar(50),
   Z_NUMBER             numeric(8,0) not null,
   EMAIL_ADDRESS        varchar(50),
   PHONE_NUMBER         varchar(25),
   ADDRESS              varchar(200),
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   PASSWORD             varchar(255) not null,
   primary key (USER_SEQ)
);

/*==============================================================*/
/* Table: USER_ROLE                                             */
/*==============================================================*/
create table USER_ROLE
(
   USER_ROLE_SEQ        int not null auto_increment,
   USER_ROLE_CODE       varchar(20),
   USER_ROLE_DESCRIPTION varchar(150),
   USER_SEQ_ENT_BY      numeric(10,0),
   DT_ENT               datetime,
   USER_SEQ_CHG_BY      numeric(10,0),
   DT_CHG               datetime,
   primary key (USER_ROLE_SEQ)
);

alter table CLAIMING_RESIDENCY add constraint FK_REFERENCE_7 foreign key (SUPPORTING_DOCUMENTS_SEQ)
      references SUPPORTING_DOCUMENTS (SUPPORTING_DOCUMENTS_SEQ) on delete restrict on update restrict;

alter table CLAIMING_RESIDENCY add constraint FK_REFERENCE_8 foreign key (DEMONSTRATE_RESIDENCY_SEQ)
      references DEMONSTRATE_RESIDENCY (DEMONSTRATE_RESIDENCY_SEQ) on delete restrict on update restrict;

alter table QUALIFICATION_EXCEPTION add constraint FK_REFERENCE_16 foreign key (QUALIFICATION_SEQ)
      references QUALIFICATION (QUALIFICATION_SEQ) on delete restrict on update restrict;

alter table STUDENT add constraint FK_REFERENCE_4 foreign key (STUDENT_TYPE_SEQ)
      references STUDENT_TYPE (STUDENT_TYPE_SEQ) on delete restrict on update restrict;

alter table STUDENT add constraint FK_REFERENCE_5 foreign key (NON_CITIZEN_SEQ)
      references NON_CITIZEN (NON_CITIZEN_SEQ) on delete restrict on update restrict;

alter table STUDENT add constraint FK_REFERENCE_6 foreign key (NON_RESIDENT_SEQ)
      references NON_RESIDENT (NON_RESIDENT_SEQ) on delete restrict on update restrict;

alter table STUDENT_RESIDENCY add constraint FK_REFERENCE_11 foreign key (STUDENT_SEQ)
      references STUDENT (STUDENT_SEQ) on delete restrict on update restrict;

alter table STUDENT_RESIDENCY add constraint FK_REFERENCE_13 foreign key (USER_SEQ)
      references USER (USER_SEQ) on delete restrict on update restrict;

alter table STUDENT_RESIDENCY add constraint FK_REFERENCE_14 foreign key (RESIDENCY_DECLARATION_SEQ)
      references RESIDENCY_DECLARATION (RESIDENCY_DECLARATION_SEQ) on delete restrict on update restrict;

alter table STUDENT_RESIDENCY add constraint FK_REFERENCE_15 foreign key (STATUS_SEQ)
      references STATUS (STATUS_SEQ) on delete restrict on update restrict;

alter table STUDENT_RESIDENCY add constraint FK_REFERENCE_17 foreign key (EVIDENCE_OF_RESIDENCY_SEQ)
      references EVIDENCE_OF_RESIDENCY (EVIDENCE_OF_RESIDENCY_SEQ) on delete restrict on update restrict;

alter table STUDENT_RESIDENCY add constraint FK_REFERENCE_9 foreign key (CLAIMING_RESIDENCY_SEQ)
      references CLAIMING_RESIDENCY (CLAIMING_RESIDENCY_SEQ) on delete cascade on update restrict;

alter table USER add constraint FK_REFERENCE_12 foreign key (USER_ROLE_SEQ)
      references USER_ROLE (USER_ROLE_SEQ) on delete restrict on update restrict;

