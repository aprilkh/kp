/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     7/1/2019 10:23:49 AM                         */
/*==============================================================*/


drop table if exists CIVITAS;

drop table if exists FEEDBACK;

drop table if exists KOMPLAIN;

drop table if exists LAYANAN_UNIT;

drop table if exists PENYELESAIAN;

drop table if exists UNIT;

/*==============================================================*/
/* Table: CIVITAS                                               */
/*==============================================================*/
create table CIVITAS
(
   C_ID                 varchar(3) not null,
   U_ID                 varchar(3) not null,
   C_NAMA               varchar(100),
   C_EMAIL              varchar(100),
   C_PASSWORD           varchar(100),
   C_JABATAN            varchar(100),
   primary key (C_ID)
);

/*==============================================================*/
/* Table: FEEDBACK                                              */
/*==============================================================*/
create table FEEDBACK
(
   F_ID                 varchar(3) not null,
   K_ID                 varchar(3),
   F_TANYA              varchar(100),
   F_JAWAB              varchar(100),
   primary key (F_ID)
);

/*==============================================================*/
/* Table: KOMPLAIN                                              */
/*==============================================================*/
create table KOMPLAIN
(
   K_ID                 varchar(3) not null,
   C_ID                 varchar(3),
   F_ID                 varchar(3),
   PS_ID                varchar(3),
   K_UNIT               varchar(100),
   K_KOMPLAIN           varchar(10000),
   K_LAMPIRAN           varchar(100),
   K_PRIORITAS          varchar(100),
   K_TIKET              varchar(100),
   primary key (K_ID)
);

/*==============================================================*/
/* Table: LAYANAN_UNIT                                          */
/*==============================================================*/
create table LAYANAN_UNIT
(
   LAY_ID               varchar(3) not null,
   U_ID                 varchar(3) not null,
   LAY_UNIT             varchar(100),
   primary key (LAY_ID)
);

/*==============================================================*/
/* Table: PENYELESAIAN                                          */
/*==============================================================*/
create table PENYELESAIAN
(
   PS_ID                varchar(3) not null,
   K_ID                 varchar(3),
   PS_BALASAN           varchar(1000),
   primary key (PS_ID)
);

/*==============================================================*/
/* Table: UNIT                                                  */
/*==============================================================*/
create table UNIT
(
   U_ID                 varchar(3) not null,
   U_NAMA               varchar(100),
   primary key (U_ID)
);

alter table CIVITAS add constraint FK_RELATIONSHIP_6 foreign key (U_ID)
      references UNIT (U_ID) on delete restrict on update restrict;

alter table FEEDBACK add constraint FK_RELATIONSHIP_5 foreign key (K_ID)
      references KOMPLAIN (K_ID) on delete restrict on update restrict;

alter table KOMPLAIN add constraint FK_MENGIRIM foreign key (C_ID)
      references CIVITAS (C_ID) on delete restrict on update restrict;

alter table KOMPLAIN add constraint FK_RELATIONSHIP_4 foreign key (F_ID)
      references FEEDBACK (F_ID) on delete restrict on update restrict;

alter table KOMPLAIN add constraint FK_RELATIONSHIP_7 foreign key (PS_ID)
      references PENYELESAIAN (PS_ID) on delete restrict on update restrict;

alter table LAYANAN_UNIT add constraint FK_RELATIONSHIP_9 foreign key (U_ID)
      references UNIT (U_ID) on delete restrict on update restrict;

alter table PENYELESAIAN add constraint FK_RELATIONSHIP_8 foreign key (K_ID)
      references KOMPLAIN (K_ID) on delete restrict on update restrict;

