CREATE TABLE customer(
        customer_id        Int NOT NULL ,
        customer_lastname  Varchar (50) ,
        customer_firstname Varchar (50) ,
        customer_city      Varchar (100) ,
        customer_street    Varchar (100) ,
        customer_zipcode   Int ,
        PRIMARY KEY (customer_id )
)ENGINE=InnoDB;

CREATE TABLE place(
        numPlace    Int NOT NULL ,
        zone        Varchar (25) ,
        rangee      Int ,
        qte         Int ,
        customer_id Int ,
        scene_id    Int ,
        PRIMARY KEY (numPlace )
)ENGINE=InnoDB;

CREATE TABLE event(
        event_id      Int NOT NULL ,
        event_name    Varchar (50) ,
        places_number Int ,
        event_place   Varchar (100) ,
        event_time    Date ,
        scene_id      Int ,
        PRIMARY KEY (event_id )
)ENGINE=InnoDB;

CREATE TABLE tournament(
        participants_number Int ,
        event_id            Int NOT NULL ,
        PRIMARY KEY (event_id )
)ENGINE=InnoDB;

CREATE TABLE show(
        show_duration Int ,
        event_id      Int NOT NULL ,
        PRIMARY KEY (event_id )
)ENGINE=InnoDB;

CREATE TABLE category(
        category_name Varchar (30) NOT NULL ,
        PRIMARY KEY (category_name )
)ENGINE=InnoDB;

CREATE TABLE dancer(
        dancer_id        Int NOT NULL ,
        dancer_lastname  Varchar (50) ,
        dancer_firstname Varchar (50) ,
        stage_name       Varchar (25) ,
        solo_boolean     Bool ,
        school_id        Int ,
        PRIMARY KEY (dancer_id )
)ENGINE=InnoDB;

CREATE TABLE school(
        school_id     Int NOT NULL ,
        school_name   Varchar (100) ,
        school_city   Varchar (100) ,
        school_street Varchar (100) ,
        PRIMARY KEY (school_id )
)ENGINE=InnoDB;

CREATE TABLE scene(
        scene_id   Int NOT NULL ,
        scene_name Varchar (50) ,
        PRIMARY KEY (scene_id )
)ENGINE=InnoDB;

CREATE TABLE style(
        style_name Varchar (25) NOT NULL ,
        PRIMARY KEY (style_name )
)ENGINE=InnoDB;

CREATE TABLE school_agent(
        school_agent_id        Int NOT NULL ,
        school_agent_lastname  Varchar (50) ,
        school_agent_firstname Varchar (50) ,
        school_agent_city      Varchar (100) ,
        school_agent_street    Varchar (100) ,
        school_agent_zipcode   Int ,
        school_id              Int ,
        PRIMARY KEY (school_agent_id )
)ENGINE=InnoDB;

CREATE TABLE user(
        username Varchar (25) NOT NULL ,
        password Varchar (120) NOT NULL ,
	mail_address Varchar (70) NOT NULL,
        PRIMARY KEY (username ,password ,mail_address)
)ENGINE=InnoDB;

CREATE TABLE concern(
        event_id      Int NOT NULL ,
        category_name Varchar (30) NOT NULL ,
        PRIMARY KEY (event_id ,category_name )
)ENGINE=InnoDB;

CREATE TABLE participate(
        dancer_id Int NOT NULL ,
        event_id  Int NOT NULL ,
        PRIMARY KEY (dancer_id ,event_id )
)ENGINE=InnoDB;

CREATE TABLE characterize(
        event_id   Int NOT NULL ,
        style_name Varchar (25) NOT NULL ,
        PRIMARY KEY (event_id ,style_name )
)ENGINE=InnoDB;

CREATE TABLE can_be(
        customer_id     Int NOT NULL ,
        username        Varchar (25) NOT NULL ,
        password        Varchar (120) NOT NULL ,
        mail_address Varchar (70) NOT NULL,
        dancer_id       Int NOT NULL ,
        school_agent_id Int NOT NULL ,
        PRIMARY KEY (customer_id ,username ,password ,mail_address ,dancer_id ,school_agent_id )
)ENGINE=InnoDB;

ALTER TABLE PLACE ADD CONSTRAINT FK_PLACE_customer_id FOREIGN KEY (customer_id) REFERENCES CUSTOMER(customer_id);
ALTER TABLE PLACE ADD CONSTRAINT FK_PLACE_scene_id FOREIGN KEY (scene_id) REFERENCES SCENE(scene_id);
ALTER TABLE EVENT ADD CONSTRAINT FK_EVENT_scene_id FOREIGN KEY (scene_id) REFERENCES SCENE(scene_id);
ALTER TABLE TOURNAMENT ADD CONSTRAINT FK_TOURNAMENT_event_id FOREIGN KEY (event_id) REFERENCES EVENT(event_id);
ALTER TABLE SHOW ADD CONSTRAINT FK_SHOW_event_id FOREIGN KEY (event_id) REFERENCES EVENT(event_id);
ALTER TABLE DANCER ADD CONSTRAINT FK_DANCER_school_id FOREIGN KEY (school_id) REFERENCES SCHOOL(school_id);
ALTER TABLE SCHOOL_AGENT ADD CONSTRAINT FK_SCHOOL_AGENT_school_id FOREIGN KEY (school_id) REFERENCES SCHOOL(school_id);
ALTER TABLE concern ADD CONSTRAINT FK_concern_event_id FOREIGN KEY (event_id) REFERENCES EVENT(event_id);
ALTER TABLE concern ADD CONSTRAINT FK_concern_category_name FOREIGN KEY (category_name) REFERENCES CATEGORY(category_name);
ALTER TABLE participate ADD CONSTRAINT FK_participate_dancer_id FOREIGN KEY (dancer_id) REFERENCES DANCER(dancer_id);
ALTER TABLE participate ADD CONSTRAINT FK_participate_event_id FOREIGN KEY (event_id) REFERENCES EVENT(event_id);
ALTER TABLE characterize ADD CONSTRAINT FK_characterize_event_id FOREIGN KEY (event_id) REFERENCES EVENT(event_id);
ALTER TABLE characterize ADD CONSTRAINT FK_characterize_style_name FOREIGN KEY (style_name) REFERENCES STYLE(style_name);
ALTER TABLE can_be ADD CONSTRAINT FK_can_be_customer_id FOREIGN KEY (customer_id) REFERENCES CUSTOMER(customer_id);
ALTER TABLE can_be ADD CONSTRAINT FK_can_be_username FOREIGN KEY (username) REFERENCES USER(username);
ALTER TABLE can_be ADD CONSTRAINT FK_can_be_password FOREIGN KEY (password) REFERENCES USER(password);
ALTER TABLE can_be ADD CONSTRAINT FK_can_be_dancer_id FOREIGN KEY (dancer_id) REFERENCES DANCER(dancer_id);
ALTER TABLE can_be ADD CONSTRAINT FK_can_be_school_agent_id FOREIGN KEY (school_agent_id) REFERENCES SCHOOL_AGENT(school_agent_id);
