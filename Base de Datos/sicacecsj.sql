PGDMP     ;    #    
        
    w         	   sicacecsj    9.5.2    9.5.2 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           1262    20431 	   sicacecsj    DATABASE     �   CREATE DATABASE sicacecsj WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_El Salvador.1252' LC_CTYPE = 'Spanish_El Salvador.1252';
    DROP DATABASE sicacecsj;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    6            �           0    0    public    ACL     �   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                  postgres    false    6                        3079    12355    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1259    20434    alumnos    TABLE     �  CREATE TABLE alumnos (
    idalum integer NOT NULL,
    nombrea character varying(150) NOT NULL,
    apellidoa character varying(150) NOT NULL,
    nacionalidada character varying(100) DEFAULT 'NULL'::character varying,
    deptonaca character varying(150) DEFAULT 'NULL'::character varying,
    munnaca character varying(150) DEFAULT 'NULL'::character varying,
    direcciona character varying(250) DEFAULT 'NULL'::character varying,
    email character varying(150) DEFAULT 'NULL'::character varying,
    generoa character varying(25) DEFAULT 'NULL'::character varying,
    fnacimientoa date,
    telefonoa character varying(10) DEFAULT 'NULL'::character varying,
    lugarnacimientoa character varying(150) DEFAULT 'NULL'::character varying,
    estadoa integer,
    estadocivila character varying(30) DEFAULT 'NULL'::character varying,
    tipocallea character varying(20) DEFAULT 'NULL'::character varying,
    zonaa character varying(10) DEFAULT 'NULL'::character varying,
    mediotransa character varying(10) DEFAULT 'NULL'::character varying,
    distanciaa character varying(150) DEFAULT 'NULL'::character varying,
    factorriesgoa character varying(100) DEFAULT 'NULL'::character varying,
    trabajaa character varying(10) DEFAULT 'NULL'::character varying,
    dependenciaecoa character varying(50) DEFAULT 'NULL'::character varying,
    tarjetavacunasa character varying(10) DEFAULT 'NULL'::character varying,
    esquemavacunasa character varying(10) DEFAULT 'NULL'::character varying,
    enfdisa character varying(150) DEFAULT 'NULL'::character varying,
    premeda character varying(250) DEFAULT 'NULL'::character varying,
    nombresp character varying(150) DEFAULT 'NULL'::character varying,
    apellidosp character varying(150) DEFAULT 'NULL'::character varying,
    nacionalidadp character varying(150) DEFAULT 'NULL'::character varying,
    deptonacp character varying(150) DEFAULT 'NULL'::character varying,
    lugarnacimientop character varying(350) DEFAULT 'NULL'::character varying,
    generop character varying(10) DEFAULT 'NULL'::character varying,
    estadofamiliarp character varying(20) DEFAULT 'NULL'::character varying,
    graestp character varying(150) DEFAULT 'NULL'::character varying,
    profp character varying(250) DEFAULT 'NULL'::character varying,
    direccionp character varying(350) DEFAULT 'NULL'::character varying,
    telefonop character varying(10) DEFAULT 'NULL'::character varying,
    emailp character varying(250) DEFAULT 'NULL'::character varying,
    lugartrap character varying(250) DEFAULT 'NULL'::character varying,
    fnacimientop date,
    duip character varying(20) DEFAULT 'NULL'::character varying,
    nitp character varying(20) DEFAULT 'NULL'::character varying,
    zonap character varying(10) DEFAULT 'NULL'::character varying,
    duim character varying(20) DEFAULT 'NULL'::character varying,
    nitm character varying(20) DEFAULT 'NULL'::character varying,
    nombresm character varying(150) DEFAULT 'NULL'::character varying,
    apellidosm character varying(150) DEFAULT 'NULL'::character varying,
    fnacimientom date,
    nacionalidadm character varying(150) DEFAULT 'NULL'::character varying,
    lugarnacimientom character varying(250) DEFAULT 'NULL'::character varying,
    deptonacm character varying(150) DEFAULT 'NULL'::character varying,
    zonam character varying(10) DEFAULT 'NULL'::character varying,
    generom character varying(10) DEFAULT 'NULL'::character varying,
    estadofamiliarm character varying(20) DEFAULT 'NULL'::character varying,
    graestm character varying(150) DEFAULT 'NULL'::character varying,
    profm character varying(150) DEFAULT 'NULL'::character varying,
    direccionm character varying(250) DEFAULT 'NULL'::character varying,
    telefonom character varying(10) DEFAULT 'NULL'::character varying,
    emailm character varying(250) DEFAULT 'NULL'::character varying,
    lugartram character varying(255) DEFAULT 'NULL'::character varying,
    carnet character varying(50) NOT NULL
);
    DROP TABLE public.alumnos;
       public         postgres    false    6            �           0    0    TABLE alumnos    COMMENT     %   COMMENT ON TABLE alumnos IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.idalum    COMMENT     -   COMMENT ON COLUMN alumnos.idalum IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.nombrea    COMMENT     .   COMMENT ON COLUMN alumnos.nombrea IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.apellidoa    COMMENT     0   COMMENT ON COLUMN alumnos.apellidoa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.nacionalidada    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidada IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.deptonaca    COMMENT     0   COMMENT ON COLUMN alumnos.deptonaca IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.munnaca    COMMENT     .   COMMENT ON COLUMN alumnos.munnaca IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.direcciona    COMMENT     1   COMMENT ON COLUMN alumnos.direcciona IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.email    COMMENT     ,   COMMENT ON COLUMN alumnos.email IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.generoa    COMMENT     .   COMMENT ON COLUMN alumnos.generoa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.fnacimientoa    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientoa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.telefonoa    COMMENT     0   COMMENT ON COLUMN alumnos.telefonoa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.lugarnacimientoa    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientoa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.estadoa    COMMENT     .   COMMENT ON COLUMN alumnos.estadoa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.estadocivila    COMMENT     3   COMMENT ON COLUMN alumnos.estadocivila IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.tipocallea    COMMENT     1   COMMENT ON COLUMN alumnos.tipocallea IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.zonaa    COMMENT     ,   COMMENT ON COLUMN alumnos.zonaa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.mediotransa    COMMENT     2   COMMENT ON COLUMN alumnos.mediotransa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.distanciaa    COMMENT     1   COMMENT ON COLUMN alumnos.distanciaa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.factorriesgoa    COMMENT     4   COMMENT ON COLUMN alumnos.factorriesgoa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.trabajaa    COMMENT     /   COMMENT ON COLUMN alumnos.trabajaa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.dependenciaecoa    COMMENT     6   COMMENT ON COLUMN alumnos.dependenciaecoa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.tarjetavacunasa    COMMENT     6   COMMENT ON COLUMN alumnos.tarjetavacunasa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.esquemavacunasa    COMMENT     6   COMMENT ON COLUMN alumnos.esquemavacunasa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.enfdisa    COMMENT     .   COMMENT ON COLUMN alumnos.enfdisa IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.premeda    COMMENT     .   COMMENT ON COLUMN alumnos.premeda IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.nombresp    COMMENT     /   COMMENT ON COLUMN alumnos.nombresp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.apellidosp    COMMENT     1   COMMENT ON COLUMN alumnos.apellidosp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.nacionalidadp    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidadp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.deptonacp    COMMENT     0   COMMENT ON COLUMN alumnos.deptonacp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.lugarnacimientop    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientop IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.generop    COMMENT     .   COMMENT ON COLUMN alumnos.generop IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.estadofamiliarp    COMMENT     6   COMMENT ON COLUMN alumnos.estadofamiliarp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.graestp    COMMENT     .   COMMENT ON COLUMN alumnos.graestp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.profp    COMMENT     ,   COMMENT ON COLUMN alumnos.profp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.direccionp    COMMENT     1   COMMENT ON COLUMN alumnos.direccionp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.telefonop    COMMENT     0   COMMENT ON COLUMN alumnos.telefonop IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.emailp    COMMENT     -   COMMENT ON COLUMN alumnos.emailp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.lugartrap    COMMENT     0   COMMENT ON COLUMN alumnos.lugartrap IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.fnacimientop    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientop IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.duip    COMMENT     +   COMMENT ON COLUMN alumnos.duip IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.nitp    COMMENT     +   COMMENT ON COLUMN alumnos.nitp IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.zonap    COMMENT     ,   COMMENT ON COLUMN alumnos.zonap IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.duim    COMMENT     +   COMMENT ON COLUMN alumnos.duim IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.nitm    COMMENT     +   COMMENT ON COLUMN alumnos.nitm IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.nombresm    COMMENT     /   COMMENT ON COLUMN alumnos.nombresm IS 'TRIAL';
            public       postgres    false    182            �           0    0    COLUMN alumnos.apellidosm    COMMENT     1   COMMENT ON COLUMN alumnos.apellidosm IS 'TRIAL';
            public       postgres    false    182             	           0    0    COLUMN alumnos.fnacimientom    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientom IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.nacionalidadm    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidadm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.lugarnacimientom    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientom IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.deptonacm    COMMENT     0   COMMENT ON COLUMN alumnos.deptonacm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.zonam    COMMENT     ,   COMMENT ON COLUMN alumnos.zonam IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.generom    COMMENT     .   COMMENT ON COLUMN alumnos.generom IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.estadofamiliarm    COMMENT     6   COMMENT ON COLUMN alumnos.estadofamiliarm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.graestm    COMMENT     .   COMMENT ON COLUMN alumnos.graestm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.profm    COMMENT     ,   COMMENT ON COLUMN alumnos.profm IS 'TRIAL';
            public       postgres    false    182            		           0    0    COLUMN alumnos.direccionm    COMMENT     1   COMMENT ON COLUMN alumnos.direccionm IS 'TRIAL';
            public       postgres    false    182            
	           0    0    COLUMN alumnos.telefonom    COMMENT     0   COMMENT ON COLUMN alumnos.telefonom IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.emailm    COMMENT     -   COMMENT ON COLUMN alumnos.emailm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.lugartram    COMMENT     0   COMMENT ON COLUMN alumnos.lugartram IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.carnet    COMMENT     -   COMMENT ON COLUMN alumnos.carnet IS 'TRIAL';
            public       postgres    false    182            �            1259    20432    alumnos_idalum_seq    SEQUENCE     t   CREATE SEQUENCE alumnos_idalum_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.alumnos_idalum_seq;
       public       postgres    false    6    182            	           0    0    alumnos_idalum_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE alumnos_idalum_seq OWNED BY alumnos.idalum;
            public       postgres    false    181            �            1259    20497 
   asignacion    TABLE     |   CREATE TABLE asignacion (
    idasign integer NOT NULL,
    idalum integer,
    idmateria integer,
    iddocente integer
);
    DROP TABLE public.asignacion;
       public         postgres    false    6            	           0    0    TABLE asignacion    COMMENT     (   COMMENT ON TABLE asignacion IS 'TRIAL';
            public       postgres    false    184            	           0    0    COLUMN asignacion.idasign    COMMENT     1   COMMENT ON COLUMN asignacion.idasign IS 'TRIAL';
            public       postgres    false    184            	           0    0    COLUMN asignacion.idalum    COMMENT     0   COMMENT ON COLUMN asignacion.idalum IS 'TRIAL';
            public       postgres    false    184            	           0    0    COLUMN asignacion.idmateria    COMMENT     3   COMMENT ON COLUMN asignacion.idmateria IS 'TRIAL';
            public       postgres    false    184            	           0    0    COLUMN asignacion.iddocente    COMMENT     3   COMMENT ON COLUMN asignacion.iddocente IS 'TRIAL';
            public       postgres    false    184            �            1259    20495    asignacion_idasign_seq    SEQUENCE     x   CREATE SEQUENCE asignacion_idasign_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.asignacion_idasign_seq;
       public       postgres    false    6    184            	           0    0    asignacion_idasign_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE asignacion_idasign_seq OWNED BY asignacion.idasign;
            public       postgres    false    183            �            1259    20508    docente    TABLE     H  CREATE TABLE docente (
    iddocente integer NOT NULL,
    nombresd character varying(45) NOT NULL,
    apellidosd character varying(45) NOT NULL,
    fechanac date NOT NULL,
    generod character varying(45) NOT NULL,
    especialidad character varying(45) NOT NULL,
    nacionalidad character varying(45) NOT NULL,
    depdocente character varying(45) NOT NULL,
    municipiodocente character varying(45) NOT NULL,
    telefono character varying(45) NOT NULL,
    correo character varying(100) NOT NULL,
    direccion character varying(200) NOT NULL,
    estado integer NOT NULL
);
    DROP TABLE public.docente;
       public         postgres    false    6            	           0    0    TABLE docente    COMMENT     %   COMMENT ON TABLE docente IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.iddocente    COMMENT     0   COMMENT ON COLUMN docente.iddocente IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.nombresd    COMMENT     /   COMMENT ON COLUMN docente.nombresd IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.apellidosd    COMMENT     1   COMMENT ON COLUMN docente.apellidosd IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.fechanac    COMMENT     /   COMMENT ON COLUMN docente.fechanac IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.generod    COMMENT     .   COMMENT ON COLUMN docente.generod IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.especialidad    COMMENT     3   COMMENT ON COLUMN docente.especialidad IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.nacionalidad    COMMENT     3   COMMENT ON COLUMN docente.nacionalidad IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.depdocente    COMMENT     1   COMMENT ON COLUMN docente.depdocente IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.municipiodocente    COMMENT     7   COMMENT ON COLUMN docente.municipiodocente IS 'TRIAL';
            public       postgres    false    186            	           0    0    COLUMN docente.telefono    COMMENT     /   COMMENT ON COLUMN docente.telefono IS 'TRIAL';
            public       postgres    false    186             	           0    0    COLUMN docente.correo    COMMENT     -   COMMENT ON COLUMN docente.correo IS 'TRIAL';
            public       postgres    false    186            !	           0    0    COLUMN docente.direccion    COMMENT     0   COMMENT ON COLUMN docente.direccion IS 'TRIAL';
            public       postgres    false    186            "	           0    0    COLUMN docente.estado    COMMENT     -   COMMENT ON COLUMN docente.estado IS 'TRIAL';
            public       postgres    false    186            �            1259    20506    docente_iddocente_seq    SEQUENCE     w   CREATE SEQUENCE docente_iddocente_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.docente_iddocente_seq;
       public       postgres    false    186    6            #	           0    0    docente_iddocente_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE docente_iddocente_seq OWNED BY docente.iddocente;
            public       postgres    false    185            �            1259    20519    inscripcion    TABLE     ^  CREATE TABLE inscripcion (
    idinscripcion integer NOT NULL,
    fechaingreso date NOT NULL,
    codinfra integer NOT NULL,
    ciclo character varying(10) NOT NULL,
    anioelectivo date NOT NULL,
    grado integer NOT NULL,
    seccion character varying(10) NOT NULL,
    turno character varying(20) NOT NULL,
    duir character varying(15) NOT NULL,
    nitr character varying(20) NOT NULL,
    nombresr character varying(250) NOT NULL,
    apellidosr character varying(250) NOT NULL,
    telefonor character varying(10) NOT NULL,
    direccionr character varying(255) NOT NULL,
    idalum integer
);
    DROP TABLE public.inscripcion;
       public         postgres    false    6            $	           0    0    TABLE inscripcion    COMMENT     )   COMMENT ON TABLE inscripcion IS 'TRIAL';
            public       postgres    false    188            %	           0    0     COLUMN inscripcion.idinscripcion    COMMENT     8   COMMENT ON COLUMN inscripcion.idinscripcion IS 'TRIAL';
            public       postgres    false    188            &	           0    0    COLUMN inscripcion.fechaingreso    COMMENT     7   COMMENT ON COLUMN inscripcion.fechaingreso IS 'TRIAL';
            public       postgres    false    188            '	           0    0    COLUMN inscripcion.codinfra    COMMENT     3   COMMENT ON COLUMN inscripcion.codinfra IS 'TRIAL';
            public       postgres    false    188            (	           0    0    COLUMN inscripcion.ciclo    COMMENT     0   COMMENT ON COLUMN inscripcion.ciclo IS 'TRIAL';
            public       postgres    false    188            )	           0    0    COLUMN inscripcion.anioelectivo    COMMENT     7   COMMENT ON COLUMN inscripcion.anioelectivo IS 'TRIAL';
            public       postgres    false    188            *	           0    0    COLUMN inscripcion.grado    COMMENT     0   COMMENT ON COLUMN inscripcion.grado IS 'TRIAL';
            public       postgres    false    188            +	           0    0    COLUMN inscripcion.seccion    COMMENT     2   COMMENT ON COLUMN inscripcion.seccion IS 'TRIAL';
            public       postgres    false    188            ,	           0    0    COLUMN inscripcion.turno    COMMENT     0   COMMENT ON COLUMN inscripcion.turno IS 'TRIAL';
            public       postgres    false    188            -	           0    0    COLUMN inscripcion.duir    COMMENT     /   COMMENT ON COLUMN inscripcion.duir IS 'TRIAL';
            public       postgres    false    188            .	           0    0    COLUMN inscripcion.nitr    COMMENT     /   COMMENT ON COLUMN inscripcion.nitr IS 'TRIAL';
            public       postgres    false    188            /	           0    0    COLUMN inscripcion.nombresr    COMMENT     3   COMMENT ON COLUMN inscripcion.nombresr IS 'TRIAL';
            public       postgres    false    188            0	           0    0    COLUMN inscripcion.apellidosr    COMMENT     5   COMMENT ON COLUMN inscripcion.apellidosr IS 'TRIAL';
            public       postgres    false    188            1	           0    0    COLUMN inscripcion.telefonor    COMMENT     4   COMMENT ON COLUMN inscripcion.telefonor IS 'TRIAL';
            public       postgres    false    188            2	           0    0    COLUMN inscripcion.direccionr    COMMENT     5   COMMENT ON COLUMN inscripcion.direccionr IS 'TRIAL';
            public       postgres    false    188            3	           0    0    COLUMN inscripcion.idalum    COMMENT     1   COMMENT ON COLUMN inscripcion.idalum IS 'TRIAL';
            public       postgres    false    188            �            1259    20517    inscripcion_idinscripcion_seq    SEQUENCE        CREATE SEQUENCE inscripcion_idinscripcion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.inscripcion_idinscripcion_seq;
       public       postgres    false    6    188            4	           0    0    inscripcion_idinscripcion_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE inscripcion_idinscripcion_seq OWNED BY inscripcion.idinscripcion;
            public       postgres    false    187            �            1259    20531    materia    TABLE     y   CREATE TABLE materia (
    idmateria integer NOT NULL,
    materia character varying(50) NOT NULL,
    idnota integer
);
    DROP TABLE public.materia;
       public         postgres    false    6            5	           0    0    TABLE materia    COMMENT     %   COMMENT ON TABLE materia IS 'TRIAL';
            public       postgres    false    190            6	           0    0    COLUMN materia.idmateria    COMMENT     0   COMMENT ON COLUMN materia.idmateria IS 'TRIAL';
            public       postgres    false    190            7	           0    0    COLUMN materia.materia    COMMENT     .   COMMENT ON COLUMN materia.materia IS 'TRIAL';
            public       postgres    false    190            8	           0    0    COLUMN materia.idnota    COMMENT     -   COMMENT ON COLUMN materia.idnota IS 'TRIAL';
            public       postgres    false    190            �            1259    20529    materia_idmateria_seq    SEQUENCE     w   CREATE SEQUENCE materia_idmateria_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.materia_idmateria_seq;
       public       postgres    false    190    6            9	           0    0    materia_idmateria_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE materia_idmateria_seq OWNED BY materia.idmateria;
            public       postgres    false    189            �            1259    20540    nota    TABLE     W   CREATE TABLE nota (
    idnota integer NOT NULL,
    nota double precision NOT NULL
);
    DROP TABLE public.nota;
       public         postgres    false    6            :	           0    0 
   TABLE nota    COMMENT     "   COMMENT ON TABLE nota IS 'TRIAL';
            public       postgres    false    192            ;	           0    0    COLUMN nota.idnota    COMMENT     *   COMMENT ON COLUMN nota.idnota IS 'TRIAL';
            public       postgres    false    192            <	           0    0    COLUMN nota.nota    COMMENT     (   COMMENT ON COLUMN nota.nota IS 'TRIAL';
            public       postgres    false    192            �            1259    20538    nota_idnota_seq    SEQUENCE     q   CREATE SEQUENCE nota_idnota_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.nota_idnota_seq;
       public       postgres    false    6    192            =	           0    0    nota_idnota_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE nota_idnota_seq OWNED BY nota.idnota;
            public       postgres    false    191            �            1259    20548    registro    TABLE     d   CREATE TABLE registro (
    idregistro integer NOT NULL,
    idalum integer,
    idasign integer
);
    DROP TABLE public.registro;
       public         postgres    false    6            >	           0    0    TABLE registro    COMMENT     &   COMMENT ON TABLE registro IS 'TRIAL';
            public       postgres    false    194            ?	           0    0    COLUMN registro.idregistro    COMMENT     2   COMMENT ON COLUMN registro.idregistro IS 'TRIAL';
            public       postgres    false    194            @	           0    0    COLUMN registro.idalum    COMMENT     .   COMMENT ON COLUMN registro.idalum IS 'TRIAL';
            public       postgres    false    194            A	           0    0    COLUMN registro.idasign    COMMENT     /   COMMENT ON COLUMN registro.idasign IS 'TRIAL';
            public       postgres    false    194            �            1259    20546    registro_idregistro_seq    SEQUENCE     y   CREATE SEQUENCE registro_idregistro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.registro_idregistro_seq;
       public       postgres    false    194    6            B	           0    0    registro_idregistro_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE registro_idregistro_seq OWNED BY registro.idregistro;
            public       postgres    false    193            �            1259    20556    usuario    TABLE     �  CREATE TABLE usuario (
    idusuario integer NOT NULL,
    nombre character varying(45) DEFAULT 'NULL'::character varying,
    clave character varying(45) DEFAULT 'NULL'::character varying,
    email character varying(45) DEFAULT 'NULL'::character varying,
    nivel integer,
    apellido character varying(45) DEFAULT 'NULL'::character varying,
    sexo character varying(45) DEFAULT 'NULL'::character varying
);
    DROP TABLE public.usuario;
       public         postgres    false    6            C	           0    0    TABLE usuario    COMMENT     %   COMMENT ON TABLE usuario IS 'TRIAL';
            public       postgres    false    196            D	           0    0    COLUMN usuario.idusuario    COMMENT     0   COMMENT ON COLUMN usuario.idusuario IS 'TRIAL';
            public       postgres    false    196            E	           0    0    COLUMN usuario.nombre    COMMENT     -   COMMENT ON COLUMN usuario.nombre IS 'TRIAL';
            public       postgres    false    196            F	           0    0    COLUMN usuario.clave    COMMENT     ,   COMMENT ON COLUMN usuario.clave IS 'TRIAL';
            public       postgres    false    196            G	           0    0    COLUMN usuario.email    COMMENT     ,   COMMENT ON COLUMN usuario.email IS 'TRIAL';
            public       postgres    false    196            H	           0    0    COLUMN usuario.nivel    COMMENT     ,   COMMENT ON COLUMN usuario.nivel IS 'TRIAL';
            public       postgres    false    196            I	           0    0    COLUMN usuario.apellido    COMMENT     /   COMMENT ON COLUMN usuario.apellido IS 'TRIAL';
            public       postgres    false    196            J	           0    0    COLUMN usuario.sexo    COMMENT     +   COMMENT ON COLUMN usuario.sexo IS 'TRIAL';
            public       postgres    false    196            �            1259    20554    usuario_idusuario_seq    SEQUENCE     w   CREATE SEQUENCE usuario_idusuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.usuario_idusuario_seq;
       public       postgres    false    6    196            K	           0    0    usuario_idusuario_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE usuario_idusuario_seq OWNED BY usuario.idusuario;
            public       postgres    false    195            �           2604    20437    idalum    DEFAULT     b   ALTER TABLE ONLY alumnos ALTER COLUMN idalum SET DEFAULT nextval('alumnos_idalum_seq'::regclass);
 =   ALTER TABLE public.alumnos ALTER COLUMN idalum DROP DEFAULT;
       public       postgres    false    182    181    182                       2604    20500    idasign    DEFAULT     j   ALTER TABLE ONLY asignacion ALTER COLUMN idasign SET DEFAULT nextval('asignacion_idasign_seq'::regclass);
 A   ALTER TABLE public.asignacion ALTER COLUMN idasign DROP DEFAULT;
       public       postgres    false    184    183    184                        2604    20511 	   iddocente    DEFAULT     h   ALTER TABLE ONLY docente ALTER COLUMN iddocente SET DEFAULT nextval('docente_iddocente_seq'::regclass);
 @   ALTER TABLE public.docente ALTER COLUMN iddocente DROP DEFAULT;
       public       postgres    false    186    185    186            !           2604    20522    idinscripcion    DEFAULT     x   ALTER TABLE ONLY inscripcion ALTER COLUMN idinscripcion SET DEFAULT nextval('inscripcion_idinscripcion_seq'::regclass);
 H   ALTER TABLE public.inscripcion ALTER COLUMN idinscripcion DROP DEFAULT;
       public       postgres    false    187    188    188            "           2604    20534 	   idmateria    DEFAULT     h   ALTER TABLE ONLY materia ALTER COLUMN idmateria SET DEFAULT nextval('materia_idmateria_seq'::regclass);
 @   ALTER TABLE public.materia ALTER COLUMN idmateria DROP DEFAULT;
       public       postgres    false    189    190    190            #           2604    20543    idnota    DEFAULT     \   ALTER TABLE ONLY nota ALTER COLUMN idnota SET DEFAULT nextval('nota_idnota_seq'::regclass);
 :   ALTER TABLE public.nota ALTER COLUMN idnota DROP DEFAULT;
       public       postgres    false    191    192    192            $           2604    20551 
   idregistro    DEFAULT     l   ALTER TABLE ONLY registro ALTER COLUMN idregistro SET DEFAULT nextval('registro_idregistro_seq'::regclass);
 B   ALTER TABLE public.registro ALTER COLUMN idregistro DROP DEFAULT;
       public       postgres    false    194    193    194            %           2604    20559 	   idusuario    DEFAULT     h   ALTER TABLE ONLY usuario ALTER COLUMN idusuario SET DEFAULT nextval('usuario_idusuario_seq'::regclass);
 @   ALTER TABLE public.usuario ALTER COLUMN idusuario DROP DEFAULT;
       public       postgres    false    196    195    196            �          0    20434    alumnos 
   TABLE DATA               �  COPY alumnos (idalum, nombrea, apellidoa, nacionalidada, deptonaca, munnaca, direcciona, email, generoa, fnacimientoa, telefonoa, lugarnacimientoa, estadoa, estadocivila, tipocallea, zonaa, mediotransa, distanciaa, factorriesgoa, trabajaa, dependenciaecoa, tarjetavacunasa, esquemavacunasa, enfdisa, premeda, nombresp, apellidosp, nacionalidadp, deptonacp, lugarnacimientop, generop, estadofamiliarp, graestp, profp, direccionp, telefonop, emailp, lugartrap, fnacimientop, duip, nitp, zonap, duim, nitm, nombresm, apellidosm, fnacimientom, nacionalidadm, lugarnacimientom, deptonacm, zonam, generom, estadofamiliarm, graestm, profm, direccionm, telefonom, emailm, lugartram, carnet) FROM stdin;
    public       postgres    false    182   ��       L	           0    0    alumnos_idalum_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('alumnos_idalum_seq', 184, true);
            public       postgres    false    181            �          0    20497 
   asignacion 
   TABLE DATA               D   COPY asignacion (idasign, idalum, idmateria, iddocente) FROM stdin;
    public       postgres    false    184   �       M	           0    0    asignacion_idasign_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('asignacion_idasign_seq', 1, false);
            public       postgres    false    183            �          0    20508    docente 
   TABLE DATA               �   COPY docente (iddocente, nombresd, apellidosd, fechanac, generod, especialidad, nacionalidad, depdocente, municipiodocente, telefono, correo, direccion, estado) FROM stdin;
    public       postgres    false    186   )�       N	           0    0    docente_iddocente_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('docente_iddocente_seq', 14, true);
            public       postgres    false    185            �          0    20519    inscripcion 
   TABLE DATA               �   COPY inscripcion (idinscripcion, fechaingreso, codinfra, ciclo, anioelectivo, grado, seccion, turno, duir, nitr, nombresr, apellidosr, telefonor, direccionr, idalum) FROM stdin;
    public       postgres    false    188   ��       O	           0    0    inscripcion_idinscripcion_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('inscripcion_idinscripcion_seq', 20, true);
            public       postgres    false    187            �          0    20531    materia 
   TABLE DATA               6   COPY materia (idmateria, materia, idnota) FROM stdin;
    public       postgres    false    190   �       P	           0    0    materia_idmateria_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('materia_idmateria_seq', 1, false);
            public       postgres    false    189            �          0    20540    nota 
   TABLE DATA               %   COPY nota (idnota, nota) FROM stdin;
    public       postgres    false    192   -�       Q	           0    0    nota_idnota_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('nota_idnota_seq', 1, false);
            public       postgres    false    191            �          0    20548    registro 
   TABLE DATA               8   COPY registro (idregistro, idalum, idasign) FROM stdin;
    public       postgres    false    194   J�       R	           0    0    registro_idregistro_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('registro_idregistro_seq', 1, false);
            public       postgres    false    193            �          0    20556    usuario 
   TABLE DATA               R   COPY usuario (idusuario, nombre, clave, email, nivel, apellido, sexo) FROM stdin;
    public       postgres    false    196   g�       S	           0    0    usuario_idusuario_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('usuario_idusuario_seq', 12, true);
            public       postgres    false    195            ,           2606    20494 
   pk_alumnos 
   CONSTRAINT     M   ALTER TABLE ONLY alumnos
    ADD CONSTRAINT pk_alumnos PRIMARY KEY (idalum);
 <   ALTER TABLE ONLY public.alumnos DROP CONSTRAINT pk_alumnos;
       public         postgres    false    182    182            1           2606    20502    pk_asignacion 
   CONSTRAINT     T   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT pk_asignacion PRIMARY KEY (idasign);
 B   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT pk_asignacion;
       public         postgres    false    184    184            3           2606    20516 
   pk_docente 
   CONSTRAINT     P   ALTER TABLE ONLY docente
    ADD CONSTRAINT pk_docente PRIMARY KEY (iddocente);
 <   ALTER TABLE ONLY public.docente DROP CONSTRAINT pk_docente;
       public         postgres    false    186    186            6           2606    20527    pk_inscripcion 
   CONSTRAINT     \   ALTER TABLE ONLY inscripcion
    ADD CONSTRAINT pk_inscripcion PRIMARY KEY (idinscripcion);
 D   ALTER TABLE ONLY public.inscripcion DROP CONSTRAINT pk_inscripcion;
       public         postgres    false    188    188            9           2606    20536 
   pk_materia 
   CONSTRAINT     P   ALTER TABLE ONLY materia
    ADD CONSTRAINT pk_materia PRIMARY KEY (idmateria);
 <   ALTER TABLE ONLY public.materia DROP CONSTRAINT pk_materia;
       public         postgres    false    190    190            ;           2606    20545    pk_nota 
   CONSTRAINT     G   ALTER TABLE ONLY nota
    ADD CONSTRAINT pk_nota PRIMARY KEY (idnota);
 6   ALTER TABLE ONLY public.nota DROP CONSTRAINT pk_nota;
       public         postgres    false    192    192            =           2606    20553    pk_registro 
   CONSTRAINT     S   ALTER TABLE ONLY registro
    ADD CONSTRAINT pk_registro PRIMARY KEY (idregistro);
 >   ALTER TABLE ONLY public.registro DROP CONSTRAINT pk_registro;
       public         postgres    false    194    194            ?           2606    20566 
   pk_usuario 
   CONSTRAINT     P   ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk_usuario PRIMARY KEY (idusuario);
 <   ALTER TABLE ONLY public.usuario DROP CONSTRAINT pk_usuario;
       public         postgres    false    196    196            4           1259    20528    idalumno    INDEX     ;   CREATE INDEX idalumno ON inscripcion USING btree (idalum);
    DROP INDEX public.idalumno;
       public         postgres    false    188            -           1259    20503 
   idx_idalum    INDEX     <   CREATE INDEX idx_idalum ON asignacion USING btree (idalum);
    DROP INDEX public.idx_idalum;
       public         postgres    false    184            .           1259    20505    idx_iddocente    INDEX     B   CREATE INDEX idx_iddocente ON asignacion USING btree (iddocente);
 !   DROP INDEX public.idx_iddocente;
       public         postgres    false    184            /           1259    20504    idx_idmateria    INDEX     B   CREATE INDEX idx_idmateria ON asignacion USING btree (idmateria);
 !   DROP INDEX public.idx_idmateria;
       public         postgres    false    184            7           1259    20537 
   idx_idnota    INDEX     9   CREATE INDEX idx_idnota ON materia USING btree (idnota);
    DROP INDEX public.idx_idnota;
       public         postgres    false    190            @           2606    20567    asignacion_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_1 FOREIGN KEY (idalum) REFERENCES alumnos(idalum) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_1;
       public       postgres    false    182    184    2092            A           2606    20572    asignacion_ibfk_2    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_2 FOREIGN KEY (idmateria) REFERENCES materia(idmateria) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_2;
       public       postgres    false    190    184    2105            B           2606    20577    asignacion_ibfk_3    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_3 FOREIGN KEY (iddocente) REFERENCES docente(iddocente) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_3;
       public       postgres    false    186    2099    184            C           2606    20582    inscripcion_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY inscripcion
    ADD CONSTRAINT inscripcion_ibfk_1 FOREIGN KEY (idalum) REFERENCES alumnos(idalum) ON UPDATE RESTRICT ON DELETE RESTRICT;
 H   ALTER TABLE ONLY public.inscripcion DROP CONSTRAINT inscripcion_ibfk_1;
       public       postgres    false    188    182    2092            D           2606    20587    materia_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY materia
    ADD CONSTRAINT materia_ibfk_1 FOREIGN KEY (idnota) REFERENCES nota(idnota) ON UPDATE RESTRICT ON DELETE RESTRICT;
 @   ALTER TABLE ONLY public.materia DROP CONSTRAINT materia_ibfk_1;
       public       postgres    false    190    2107    192            E           2606    20592    registro_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_1 FOREIGN KEY (idalum) REFERENCES alumnos(idalum) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_1;
       public       postgres    false    182    2092    194            F           2606    20597    registro_ibfk_2    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_2 FOREIGN KEY (idasign) REFERENCES asignacion(idasign) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_2;
       public       postgres    false    184    194    2097            �      x��Z�r�H=��}�r#[���h�k���DL�	�*�j�o�8�9L�'���ea!@�Z�sr7i. QY�/_�L��<��ym,�Wi�2ߊ�_����]�r��Z���p|��oE"�F�|�S^n7��F��R�[i����
o��O�yi��e]���V�^L��^����,��삫d[U�ˊL�2�����umvY���5;�R
���\򊳅��	���6�k$�T���c�>�+�.z`<��hR��6>�]!$��a7���I#Չ�op�2v�={�;�6l[;!U�򔭹P��'��o�VG,���#w���r��Wf�a`Z�����qL��l|ey8h�xۻ'�=ױ���ck[~��C�\p�M�e�c���qe,ʌ�v���O1����~?�ͺ_�X�j�������X������|;go�뽱=�}R	�ƇZm%Q�*�8�Bm�j��߰B��!�
ɳԳ���'�I]nV�b��(Y6E44]�}����m��V1��4J�������+~�K@Y���$EYҕ&�=�K�W�,��<Yp�d�gU$��x���b3v=��#�1�F�i���0����"��H��ǋ�ǯ�������M��/p��rQ	�p��i�i���xb��
�����D�_s#z�sJ�Ò8
�*����R�.��|F�}�rP\����Ŏ���ip���uI�u6}jZ#��|sa�\ό!�\`���)���pY��f7����{̞�7�LXxO�r�r� o��D|���_�t3oi+�*��ɭn&��~�ݦ ���,�Ͷ@P^���5C/ro-9���%������a�!�3����/ֈx�ȵD|8����Yd@n��Ǿԩ|�7j�=��s-H��X���,��d=����@L^��s�(vv����|����R+��aaY2MG̺���/�B�a�Ѧ��26o��
�]3�^(3g^�`wΒn�Sp;QMb������
��č|�c*.`�c^����E��� Ź�0?vB�ņ�Z�^��p��33�5���W8��8�;tH��b]�ʢ�i3plb����F�u˱����XgeQ7E�
���xSք��9]~�������k��Q	��[7����nW�W��t�_�y�V�l�z�a�U�T���uu��G������S{���J	��=�P�8�ݒ�!!��P#:�5�O���2���)�'�aQq�T�2�0��Ɋt����qZt'�A��C]�u�<�Y��+���qa��,���;��G(Q��g,\tp�҆>v��r�P�pKkl��G)b;:G��9�倴:����
t�p�1�:�V�J�y�_�	�5b��PL+rl��ء�9{!�!f�j�˔S���*�O����6����N��E>��s��9_�s�/��ol�bm�������DJ�N���w��z����d�r �PSBH��B;�z~���a��z���Xk�	�RT���;�g^.k�~�BW������hϚ�����u��W~�s�(p��8��y䥢R"!��$5@]�G��H�@Ce�X�����A���ҚʀzP{߃�����	����������@����y*^	��3��C>k�zY�1����m��8��p�4��
��� ��/�}M6��ހ_϶�1ʴ{�^	x�f���j} I���}
h���Rȝ�&����ޠ	P_:&9�a�(k�eF;���`Q)*��M��o&4@a��_;1��{��r0�Iw��db�O�";�����:�4:Wc; O�>��)�ʄ\���[� -��q�&V}�,k|\||���΄����/������9V��E�0���c��c�7���v�؁�����ޙ�T0��	%d���19�d������<#���zǕ�����	�����p�(� )�U1�<�~$c������Lp���n�
�Qݫ���>�%n7t����f���*�{�ߕ~L�D!�<���C�D�.9@6� 0��q��z�3���E^�`t��)��ߡ*t� 6N4�(Y����S�ɇӓ��_~�A�s�qiRJf�a�����w�oh��~ FQҥ�7MS�T��l{wuwuu�R���L��'J6ַ#��YQ���`|[�jr}zr -n��u��U�ܥ�� ���B�%S����[v����	)U�����*����y3ؽi�i���Z�X�5�t�,�J(i�0f\�9*#�q�!/pl�9�-S���� B�����N�?�B�}��AG T�|~�-ʫu��L���f��v�d��̙�e~;��4"�T�i��W�K��V��kd���]���H5�����p��R�s�[������h�9U�i܎�ƞ��ZA�c��c����~�.P,@z�p�c�<2�Vd*cg+^BT:��m�� ��)c\�|~{�P S6��x�@1�B��U����]���'�wu��W�������P�x���ګ<]�D�0Y��o�_rP(w� A�7rL�qb����h�9~ˮһ��aZ�!�����l��͐K��F��Bڙ��Qcc�����"�@���s}�FK�FL�]���ɌҸ���N1�ܾaB��}�p ���ț[���������I!�\��EF|�p�-�����G3��]�5�:K��Ԑ��@L���K�`o���	�c(-�xtL�>W;y�.?,0��@�݊[]���S�ҟS����*��R�G��Ji���{�6�_O_h����S����w����t�����
	��X��s;�@N;�K
�d��������)�h��a�q�fJ����[{�ChO�t���5�N
�ͻk�1`%���PcE��%���`�XmA�|C�i�t�`���s:�d���~����>���.����b	����@� <���}u�' �зtp��tCA���͆ku�C��u�L����`
+�3<�B��nj� �:� ��v|Hyk��?���"\Ȯ��]�]�����6�ֺ��#i�?u?����{�{�|4��s���~{ �.����a����;�!�
�	�x��L=��R����I�R�9���s
�X�襰�A}3�,ʞN�#Zeo^JHu����.}�Ԟ�aJ���6��A���w�@�B7���N䵇��i������Z'�%C��E͑~SvH�C"ڽnmn��Zs� 2�Y�řڶ�E�#�p�z�]��M�)�w<FH��ܙ�@�h�|��`,��^A� 3��(��ܳ��y����g~�y�H����	[���D�>��O�q���k��"ᴽ,��ӓN�{�g�E�[��c�����I�򹐍-�>lq�ZLϏ_)h1�C�0JM>�&���cM�nz�Y��ӡ��B�/<ȭ��Dk���J3
��$�&9dSG!x�w����5������v��4�@��C*���:ؔL���Н9�	�M��a�\���GE[ ź����� �v�ykpxl��`��>����6�`�Ͱ���"�t8٭3�oK;�eĴ�魽q�5\vX��o�D �T,�s8⸊�%��>�
���4�aoj9vɔ����CYF�q]���&N��v���=T��.ɱ\�V�q�!M�U�QT��SdHn
�*�4���v�<����$=[,(<�F��e؎~9J�d�DE���٭8�8��4?���˓_B��� ��9�����e�|)�|9��l�G�'_�OW��;F83��YFN�3@1�K\R�׊G�ͧ��Ȅa,�#�����#E?@�~�!Pl%�B�f*���HK�EY蒌��Q�2�;e3� �-�QlB��ah��K�4Q�g�{r�A�K��q�x�=����G�J����8@�C�����c���*�|NOR`���>i�d�h��js�uޥ?��\}�� �Q��vf������ؾ�n��)B��(���z�|G���6�x:u*��k�9`y��� �@����<˥� G  ��-�o�T�$��M%��G�����?ǥ����DB!�V� �
FY��Nh�gՊU@��!����@f�3H��Z����sB<�}T}6�I?G�h��w4�����t6���d�IӉ6?^$JA}��,��D��oN�N5�pX�q<��Ӟ�
��
/9���M�dL5ɺik��e�q����-��=�#R��E!Ҝ6wBd9>�4��rպb��6�I'Zvr���I�J�	@��`P�K%�X����G!'�1�c,'5E&=}={�D�(�:�>��kr2U
!�l*m�Bͤ��L�q�����d����7o������      �      x������ � �      �   �  x��U�n�F]��b�nK�O��E��6��uP�E゜�#g�R��˧d���v��Ҷd�md#Hy��yMĮ��������[(�Pe���jҵp,*�8�� ,q��:%�a7����#���X��E�4�YVB����<�K<������ͦ!���i�¨)_�����`'1��8�Wd+��}��<��)��]�Fhg-����������]M5�j��,���ҌYl��D�=���W�+�K'	[X�Z�kWF: �c��,��fg`9�gD�ѐ�����6��ʜ��,�8a����3��_*��_:R6���8l�x+������y2�q]�Y�eA')����a�	��d-��T8�%�el���`���h,t�c[q�AQ~��B
d��z��JleEd�,H�|ƶƉ�|sGs$�W���
Hfa[IM����R��YE���s����|G�x'�Dz(I:��͋�����KKx=Wyvr6���h Z%�b�L��==E9�1���i�ڜ��0N�l`�o��$]�=��kk���������v��p������S�"݉=�i���-�"t
�T����3ً�ސ��ܭ��\ƙ/�V�������[hj	�������e!zc���\/�W z	*��~x�52��,��+B��+$
�/�9Xs���p���_�hw�qy��0�l����鹖i6�t�7���+,-��ʿ(�d��EǾ��s-��	.��1(��8���a�gt׹��D$��X���|��'���lh��P�ON;V+X�=k߂�H� /�p(���1��]�)��V�d��"�ѡ��*�?|���5�%�-M�-����"JY�M�f�sHTʆ#ji�­a�`����~*�S�=� ��\E��?�S$P�bI��-��X�v�WH�n״E��s[1�13��o��d�H7��      �     x�Ŕ���@�k�S��b�=IJ�j%MP~��$���9��W�\R�EZ%���|>���$��9VFI-����z��鱟��=}��_����D�i�B�����#.�h��eV���6�7_&�-���8�Kߍ�ق< �g��� ��}���|���.Q����Kꗡ�~�[F�95�Mn�h���94r�dmB{�\���*�S��)�9`v�B>�C}N���iKN��E7P|y��>��"~#,1	��t=��/O$�c�#�A�-��#���{���/�:WT �㞑��v)��&�&H�۪��E�����F�EԘs��ya��S�����w��CXFvvM�w-�Aci$��m�i�QO�<jsS��6"}rӖ�W6&E�]�8%��DS�M߾�����㔱[+�^<�nv�3���Hd#�0�\�Ğ��c���"�� �@���N!&�P���i�$�¹+t�'��VF�(voLA��Do�1�^!aE��]G1u3�a��V,�s��h��6���U�      �      x������ � �      �      x������ � �      �      x������ � �      �   y   x�3�t.�,.�L��4�*H6*�7���r��Lɔ�8��&f��%��rr:�%%��+8'��s�&'��d��sqz���rF�W�$溕Fyx�q&f!i7�J�E����� �!,'     