PGDMP     8    .    	            w         	   sicacecsj    9.5.2    9.5.2 �    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
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
            public       postgres    false    182             	           0    0    COLUMN alumnos.trabajaa    COMMENT     /   COMMENT ON COLUMN alumnos.trabajaa IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.dependenciaecoa    COMMENT     6   COMMENT ON COLUMN alumnos.dependenciaecoa IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.tarjetavacunasa    COMMENT     6   COMMENT ON COLUMN alumnos.tarjetavacunasa IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.esquemavacunasa    COMMENT     6   COMMENT ON COLUMN alumnos.esquemavacunasa IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.enfdisa    COMMENT     .   COMMENT ON COLUMN alumnos.enfdisa IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.premeda    COMMENT     .   COMMENT ON COLUMN alumnos.premeda IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.nombresp    COMMENT     /   COMMENT ON COLUMN alumnos.nombresp IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.apellidosp    COMMENT     1   COMMENT ON COLUMN alumnos.apellidosp IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.nacionalidadp    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidadp IS 'TRIAL';
            public       postgres    false    182            		           0    0    COLUMN alumnos.deptonacp    COMMENT     0   COMMENT ON COLUMN alumnos.deptonacp IS 'TRIAL';
            public       postgres    false    182            
	           0    0    COLUMN alumnos.lugarnacimientop    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientop IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.generop    COMMENT     .   COMMENT ON COLUMN alumnos.generop IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.estadofamiliarp    COMMENT     6   COMMENT ON COLUMN alumnos.estadofamiliarp IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.graestp    COMMENT     .   COMMENT ON COLUMN alumnos.graestp IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.profp    COMMENT     ,   COMMENT ON COLUMN alumnos.profp IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.direccionp    COMMENT     1   COMMENT ON COLUMN alumnos.direccionp IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.telefonop    COMMENT     0   COMMENT ON COLUMN alumnos.telefonop IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.emailp    COMMENT     -   COMMENT ON COLUMN alumnos.emailp IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.lugartrap    COMMENT     0   COMMENT ON COLUMN alumnos.lugartrap IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.fnacimientop    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientop IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.duip    COMMENT     +   COMMENT ON COLUMN alumnos.duip IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.nitp    COMMENT     +   COMMENT ON COLUMN alumnos.nitp IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.zonap    COMMENT     ,   COMMENT ON COLUMN alumnos.zonap IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.duim    COMMENT     +   COMMENT ON COLUMN alumnos.duim IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.nitm    COMMENT     +   COMMENT ON COLUMN alumnos.nitm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.nombresm    COMMENT     /   COMMENT ON COLUMN alumnos.nombresm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.apellidosm    COMMENT     1   COMMENT ON COLUMN alumnos.apellidosm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.fnacimientom    COMMENT     3   COMMENT ON COLUMN alumnos.fnacimientom IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.nacionalidadm    COMMENT     4   COMMENT ON COLUMN alumnos.nacionalidadm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.lugarnacimientom    COMMENT     7   COMMENT ON COLUMN alumnos.lugarnacimientom IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.deptonacm    COMMENT     0   COMMENT ON COLUMN alumnos.deptonacm IS 'TRIAL';
            public       postgres    false    182            	           0    0    COLUMN alumnos.zonam    COMMENT     ,   COMMENT ON COLUMN alumnos.zonam IS 'TRIAL';
            public       postgres    false    182             	           0    0    COLUMN alumnos.generom    COMMENT     .   COMMENT ON COLUMN alumnos.generom IS 'TRIAL';
            public       postgres    false    182            !	           0    0    COLUMN alumnos.estadofamiliarm    COMMENT     6   COMMENT ON COLUMN alumnos.estadofamiliarm IS 'TRIAL';
            public       postgres    false    182            "	           0    0    COLUMN alumnos.graestm    COMMENT     .   COMMENT ON COLUMN alumnos.graestm IS 'TRIAL';
            public       postgres    false    182            #	           0    0    COLUMN alumnos.profm    COMMENT     ,   COMMENT ON COLUMN alumnos.profm IS 'TRIAL';
            public       postgres    false    182            $	           0    0    COLUMN alumnos.direccionm    COMMENT     1   COMMENT ON COLUMN alumnos.direccionm IS 'TRIAL';
            public       postgres    false    182            %	           0    0    COLUMN alumnos.telefonom    COMMENT     0   COMMENT ON COLUMN alumnos.telefonom IS 'TRIAL';
            public       postgres    false    182            &	           0    0    COLUMN alumnos.emailm    COMMENT     -   COMMENT ON COLUMN alumnos.emailm IS 'TRIAL';
            public       postgres    false    182            '	           0    0    COLUMN alumnos.lugartram    COMMENT     0   COMMENT ON COLUMN alumnos.lugartram IS 'TRIAL';
            public       postgres    false    182            (	           0    0    COLUMN alumnos.carnet    COMMENT     -   COMMENT ON COLUMN alumnos.carnet IS 'TRIAL';
            public       postgres    false    182            �            1259    20432    alumnos_idalum_seq    SEQUENCE     t   CREATE SEQUENCE alumnos_idalum_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.alumnos_idalum_seq;
       public       postgres    false    182    6            )	           0    0    alumnos_idalum_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE alumnos_idalum_seq OWNED BY alumnos.idalum;
            public       postgres    false    181            �            1259    20497 
   asignacion    TABLE     |   CREATE TABLE asignacion (
    idasign integer NOT NULL,
    idalum integer,
    idmateria integer,
    iddocente integer
);
    DROP TABLE public.asignacion;
       public         postgres    false    6            *	           0    0    TABLE asignacion    COMMENT     (   COMMENT ON TABLE asignacion IS 'TRIAL';
            public       postgres    false    184            +	           0    0    COLUMN asignacion.idasign    COMMENT     1   COMMENT ON COLUMN asignacion.idasign IS 'TRIAL';
            public       postgres    false    184            ,	           0    0    COLUMN asignacion.idalum    COMMENT     0   COMMENT ON COLUMN asignacion.idalum IS 'TRIAL';
            public       postgres    false    184            -	           0    0    COLUMN asignacion.idmateria    COMMENT     3   COMMENT ON COLUMN asignacion.idmateria IS 'TRIAL';
            public       postgres    false    184            .	           0    0    COLUMN asignacion.iddocente    COMMENT     3   COMMENT ON COLUMN asignacion.iddocente IS 'TRIAL';
            public       postgres    false    184            �            1259    20495    asignacion_idasign_seq    SEQUENCE     x   CREATE SEQUENCE asignacion_idasign_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.asignacion_idasign_seq;
       public       postgres    false    6    184            /	           0    0    asignacion_idasign_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE asignacion_idasign_seq OWNED BY asignacion.idasign;
            public       postgres    false    183            �            1259    20620    departamento    TABLE     c   CREATE TABLE departamento (
    iddep integer NOT NULL,
    departamento character varying(255)
);
     DROP TABLE public.departamento;
       public         postgres    false    6            �            1259    20508    docente    TABLE     H  CREATE TABLE docente (
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
       public         postgres    false    6            0	           0    0    TABLE docente    COMMENT     %   COMMENT ON TABLE docente IS 'TRIAL';
            public       postgres    false    186            1	           0    0    COLUMN docente.iddocente    COMMENT     0   COMMENT ON COLUMN docente.iddocente IS 'TRIAL';
            public       postgres    false    186            2	           0    0    COLUMN docente.nombresd    COMMENT     /   COMMENT ON COLUMN docente.nombresd IS 'TRIAL';
            public       postgres    false    186            3	           0    0    COLUMN docente.apellidosd    COMMENT     1   COMMENT ON COLUMN docente.apellidosd IS 'TRIAL';
            public       postgres    false    186            4	           0    0    COLUMN docente.fechanac    COMMENT     /   COMMENT ON COLUMN docente.fechanac IS 'TRIAL';
            public       postgres    false    186            5	           0    0    COLUMN docente.generod    COMMENT     .   COMMENT ON COLUMN docente.generod IS 'TRIAL';
            public       postgres    false    186            6	           0    0    COLUMN docente.especialidad    COMMENT     3   COMMENT ON COLUMN docente.especialidad IS 'TRIAL';
            public       postgres    false    186            7	           0    0    COLUMN docente.nacionalidad    COMMENT     3   COMMENT ON COLUMN docente.nacionalidad IS 'TRIAL';
            public       postgres    false    186            8	           0    0    COLUMN docente.depdocente    COMMENT     1   COMMENT ON COLUMN docente.depdocente IS 'TRIAL';
            public       postgres    false    186            9	           0    0    COLUMN docente.municipiodocente    COMMENT     7   COMMENT ON COLUMN docente.municipiodocente IS 'TRIAL';
            public       postgres    false    186            :	           0    0    COLUMN docente.telefono    COMMENT     /   COMMENT ON COLUMN docente.telefono IS 'TRIAL';
            public       postgres    false    186            ;	           0    0    COLUMN docente.correo    COMMENT     -   COMMENT ON COLUMN docente.correo IS 'TRIAL';
            public       postgres    false    186            <	           0    0    COLUMN docente.direccion    COMMENT     0   COMMENT ON COLUMN docente.direccion IS 'TRIAL';
            public       postgres    false    186            =	           0    0    COLUMN docente.estado    COMMENT     -   COMMENT ON COLUMN docente.estado IS 'TRIAL';
            public       postgres    false    186            �            1259    20506    docente_iddocente_seq    SEQUENCE     w   CREATE SEQUENCE docente_iddocente_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.docente_iddocente_seq;
       public       postgres    false    186    6            >	           0    0    docente_iddocente_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE docente_iddocente_seq OWNED BY docente.iddocente;
            public       postgres    false    185            �            1259    20611    horario    TABLE     �   CREATE TABLE horario (
    id integer NOT NULL,
    nombre character varying(300) NOT NULL,
    descripcion character varying(300) NOT NULL,
    horario text NOT NULL,
    fecha date NOT NULL
);
    DROP TABLE public.horario;
       public         postgres    false    6            ?	           0    0    TABLE horario    COMMENT     %   COMMENT ON TABLE horario IS 'TRIAL';
            public       postgres    false    198            @	           0    0    COLUMN horario.id    COMMENT     )   COMMENT ON COLUMN horario.id IS 'TRIAL';
            public       postgres    false    198            A	           0    0    COLUMN horario.nombre    COMMENT     -   COMMENT ON COLUMN horario.nombre IS 'TRIAL';
            public       postgres    false    198            B	           0    0    COLUMN horario.descripcion    COMMENT     2   COMMENT ON COLUMN horario.descripcion IS 'TRIAL';
            public       postgres    false    198            C	           0    0    COLUMN horario.horario    COMMENT     .   COMMENT ON COLUMN horario.horario IS 'TRIAL';
            public       postgres    false    198            D	           0    0    COLUMN horario.fecha    COMMENT     ,   COMMENT ON COLUMN horario.fecha IS 'TRIAL';
            public       postgres    false    198            �            1259    20609    horario_id_seq    SEQUENCE     p   CREATE SEQUENCE horario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.horario_id_seq;
       public       postgres    false    198    6            E	           0    0    horario_id_seq    SEQUENCE OWNED BY     3   ALTER SEQUENCE horario_id_seq OWNED BY horario.id;
            public       postgres    false    197            �            1259    20519    inscripcion    TABLE     ^  CREATE TABLE inscripcion (
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
       public         postgres    false    6            F	           0    0    TABLE inscripcion    COMMENT     )   COMMENT ON TABLE inscripcion IS 'TRIAL';
            public       postgres    false    188            G	           0    0     COLUMN inscripcion.idinscripcion    COMMENT     8   COMMENT ON COLUMN inscripcion.idinscripcion IS 'TRIAL';
            public       postgres    false    188            H	           0    0    COLUMN inscripcion.fechaingreso    COMMENT     7   COMMENT ON COLUMN inscripcion.fechaingreso IS 'TRIAL';
            public       postgres    false    188            I	           0    0    COLUMN inscripcion.codinfra    COMMENT     3   COMMENT ON COLUMN inscripcion.codinfra IS 'TRIAL';
            public       postgres    false    188            J	           0    0    COLUMN inscripcion.ciclo    COMMENT     0   COMMENT ON COLUMN inscripcion.ciclo IS 'TRIAL';
            public       postgres    false    188            K	           0    0    COLUMN inscripcion.anioelectivo    COMMENT     7   COMMENT ON COLUMN inscripcion.anioelectivo IS 'TRIAL';
            public       postgres    false    188            L	           0    0    COLUMN inscripcion.grado    COMMENT     0   COMMENT ON COLUMN inscripcion.grado IS 'TRIAL';
            public       postgres    false    188            M	           0    0    COLUMN inscripcion.seccion    COMMENT     2   COMMENT ON COLUMN inscripcion.seccion IS 'TRIAL';
            public       postgres    false    188            N	           0    0    COLUMN inscripcion.turno    COMMENT     0   COMMENT ON COLUMN inscripcion.turno IS 'TRIAL';
            public       postgres    false    188            O	           0    0    COLUMN inscripcion.duir    COMMENT     /   COMMENT ON COLUMN inscripcion.duir IS 'TRIAL';
            public       postgres    false    188            P	           0    0    COLUMN inscripcion.nitr    COMMENT     /   COMMENT ON COLUMN inscripcion.nitr IS 'TRIAL';
            public       postgres    false    188            Q	           0    0    COLUMN inscripcion.nombresr    COMMENT     3   COMMENT ON COLUMN inscripcion.nombresr IS 'TRIAL';
            public       postgres    false    188            R	           0    0    COLUMN inscripcion.apellidosr    COMMENT     5   COMMENT ON COLUMN inscripcion.apellidosr IS 'TRIAL';
            public       postgres    false    188            S	           0    0    COLUMN inscripcion.telefonor    COMMENT     4   COMMENT ON COLUMN inscripcion.telefonor IS 'TRIAL';
            public       postgres    false    188            T	           0    0    COLUMN inscripcion.direccionr    COMMENT     5   COMMENT ON COLUMN inscripcion.direccionr IS 'TRIAL';
            public       postgres    false    188            U	           0    0    COLUMN inscripcion.idalum    COMMENT     1   COMMENT ON COLUMN inscripcion.idalum IS 'TRIAL';
            public       postgres    false    188            �            1259    20517    inscripcion_idinscripcion_seq    SEQUENCE        CREATE SEQUENCE inscripcion_idinscripcion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.inscripcion_idinscripcion_seq;
       public       postgres    false    6    188            V	           0    0    inscripcion_idinscripcion_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE inscripcion_idinscripcion_seq OWNED BY inscripcion.idinscripcion;
            public       postgres    false    187            �            1259    20531    materia    TABLE     y   CREATE TABLE materia (
    idmateria integer NOT NULL,
    materia character varying(50) NOT NULL,
    idnota integer
);
    DROP TABLE public.materia;
       public         postgres    false    6            W	           0    0    TABLE materia    COMMENT     %   COMMENT ON TABLE materia IS 'TRIAL';
            public       postgres    false    190            X	           0    0    COLUMN materia.idmateria    COMMENT     0   COMMENT ON COLUMN materia.idmateria IS 'TRIAL';
            public       postgres    false    190            Y	           0    0    COLUMN materia.materia    COMMENT     .   COMMENT ON COLUMN materia.materia IS 'TRIAL';
            public       postgres    false    190            Z	           0    0    COLUMN materia.idnota    COMMENT     -   COMMENT ON COLUMN materia.idnota IS 'TRIAL';
            public       postgres    false    190            �            1259    20529    materia_idmateria_seq    SEQUENCE     w   CREATE SEQUENCE materia_idmateria_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.materia_idmateria_seq;
       public       postgres    false    190    6            [	           0    0    materia_idmateria_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE materia_idmateria_seq OWNED BY materia.idmateria;
            public       postgres    false    189            �            1259    20625 	   municipio    TABLE     v   CREATE TABLE municipio (
    idmunicipio integer NOT NULL,
    municipio character varying(255),
    iddep integer
);
    DROP TABLE public.municipio;
       public         postgres    false    6            �            1259    20540    nota    TABLE     W   CREATE TABLE nota (
    idnota integer NOT NULL,
    nota double precision NOT NULL
);
    DROP TABLE public.nota;
       public         postgres    false    6            \	           0    0 
   TABLE nota    COMMENT     "   COMMENT ON TABLE nota IS 'TRIAL';
            public       postgres    false    192            ]	           0    0    COLUMN nota.idnota    COMMENT     *   COMMENT ON COLUMN nota.idnota IS 'TRIAL';
            public       postgres    false    192            ^	           0    0    COLUMN nota.nota    COMMENT     (   COMMENT ON COLUMN nota.nota IS 'TRIAL';
            public       postgres    false    192            �            1259    20538    nota_idnota_seq    SEQUENCE     q   CREATE SEQUENCE nota_idnota_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.nota_idnota_seq;
       public       postgres    false    6    192            _	           0    0    nota_idnota_seq    SEQUENCE OWNED BY     5   ALTER SEQUENCE nota_idnota_seq OWNED BY nota.idnota;
            public       postgres    false    191            �            1259    20548    registro    TABLE     d   CREATE TABLE registro (
    idregistro integer NOT NULL,
    idalum integer,
    idasign integer
);
    DROP TABLE public.registro;
       public         postgres    false    6            `	           0    0    TABLE registro    COMMENT     &   COMMENT ON TABLE registro IS 'TRIAL';
            public       postgres    false    194            a	           0    0    COLUMN registro.idregistro    COMMENT     2   COMMENT ON COLUMN registro.idregistro IS 'TRIAL';
            public       postgres    false    194            b	           0    0    COLUMN registro.idalum    COMMENT     .   COMMENT ON COLUMN registro.idalum IS 'TRIAL';
            public       postgres    false    194            c	           0    0    COLUMN registro.idasign    COMMENT     /   COMMENT ON COLUMN registro.idasign IS 'TRIAL';
            public       postgres    false    194            �            1259    20546    registro_idregistro_seq    SEQUENCE     y   CREATE SEQUENCE registro_idregistro_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.registro_idregistro_seq;
       public       postgres    false    194    6            d	           0    0    registro_idregistro_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE registro_idregistro_seq OWNED BY registro.idregistro;
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
       public         postgres    false    6            e	           0    0    TABLE usuario    COMMENT     %   COMMENT ON TABLE usuario IS 'TRIAL';
            public       postgres    false    196            f	           0    0    COLUMN usuario.idusuario    COMMENT     0   COMMENT ON COLUMN usuario.idusuario IS 'TRIAL';
            public       postgres    false    196            g	           0    0    COLUMN usuario.nombre    COMMENT     -   COMMENT ON COLUMN usuario.nombre IS 'TRIAL';
            public       postgres    false    196            h	           0    0    COLUMN usuario.clave    COMMENT     ,   COMMENT ON COLUMN usuario.clave IS 'TRIAL';
            public       postgres    false    196            i	           0    0    COLUMN usuario.email    COMMENT     ,   COMMENT ON COLUMN usuario.email IS 'TRIAL';
            public       postgres    false    196            j	           0    0    COLUMN usuario.nivel    COMMENT     ,   COMMENT ON COLUMN usuario.nivel IS 'TRIAL';
            public       postgres    false    196            k	           0    0    COLUMN usuario.apellido    COMMENT     /   COMMENT ON COLUMN usuario.apellido IS 'TRIAL';
            public       postgres    false    196            l	           0    0    COLUMN usuario.sexo    COMMENT     +   COMMENT ON COLUMN usuario.sexo IS 'TRIAL';
            public       postgres    false    196            �            1259    20554    usuario_idusuario_seq    SEQUENCE     w   CREATE SEQUENCE usuario_idusuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.usuario_idusuario_seq;
       public       postgres    false    6    196            m	           0    0    usuario_idusuario_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE usuario_idusuario_seq OWNED BY usuario.idusuario;
            public       postgres    false    195            �           2604    20437    idalum    DEFAULT     b   ALTER TABLE ONLY alumnos ALTER COLUMN idalum SET DEFAULT nextval('alumnos_idalum_seq'::regclass);
 =   ALTER TABLE public.alumnos ALTER COLUMN idalum DROP DEFAULT;
       public       postgres    false    182    181    182            .           2604    20500    idasign    DEFAULT     j   ALTER TABLE ONLY asignacion ALTER COLUMN idasign SET DEFAULT nextval('asignacion_idasign_seq'::regclass);
 A   ALTER TABLE public.asignacion ALTER COLUMN idasign DROP DEFAULT;
       public       postgres    false    184    183    184            /           2604    20511 	   iddocente    DEFAULT     h   ALTER TABLE ONLY docente ALTER COLUMN iddocente SET DEFAULT nextval('docente_iddocente_seq'::regclass);
 @   ALTER TABLE public.docente ALTER COLUMN iddocente DROP DEFAULT;
       public       postgres    false    186    185    186            :           2604    20614    id    DEFAULT     Z   ALTER TABLE ONLY horario ALTER COLUMN id SET DEFAULT nextval('horario_id_seq'::regclass);
 9   ALTER TABLE public.horario ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    197    198    198            0           2604    20522    idinscripcion    DEFAULT     x   ALTER TABLE ONLY inscripcion ALTER COLUMN idinscripcion SET DEFAULT nextval('inscripcion_idinscripcion_seq'::regclass);
 H   ALTER TABLE public.inscripcion ALTER COLUMN idinscripcion DROP DEFAULT;
       public       postgres    false    187    188    188            1           2604    20534 	   idmateria    DEFAULT     h   ALTER TABLE ONLY materia ALTER COLUMN idmateria SET DEFAULT nextval('materia_idmateria_seq'::regclass);
 @   ALTER TABLE public.materia ALTER COLUMN idmateria DROP DEFAULT;
       public       postgres    false    190    189    190            2           2604    20543    idnota    DEFAULT     \   ALTER TABLE ONLY nota ALTER COLUMN idnota SET DEFAULT nextval('nota_idnota_seq'::regclass);
 :   ALTER TABLE public.nota ALTER COLUMN idnota DROP DEFAULT;
       public       postgres    false    191    192    192            3           2604    20551 
   idregistro    DEFAULT     l   ALTER TABLE ONLY registro ALTER COLUMN idregistro SET DEFAULT nextval('registro_idregistro_seq'::regclass);
 B   ALTER TABLE public.registro ALTER COLUMN idregistro DROP DEFAULT;
       public       postgres    false    194    193    194            4           2604    20559 	   idusuario    DEFAULT     h   ALTER TABLE ONLY usuario ALTER COLUMN idusuario SET DEFAULT nextval('usuario_idusuario_seq'::regclass);
 @   ALTER TABLE public.usuario ALTER COLUMN idusuario DROP DEFAULT;
       public       postgres    false    196    195    196            �          0    20434    alumnos 
   TABLE DATA               �  COPY alumnos (idalum, nombrea, apellidoa, nacionalidada, deptonaca, munnaca, direcciona, email, generoa, fnacimientoa, telefonoa, lugarnacimientoa, estadoa, estadocivila, tipocallea, zonaa, mediotransa, distanciaa, factorriesgoa, trabajaa, dependenciaecoa, tarjetavacunasa, esquemavacunasa, enfdisa, premeda, nombresp, apellidosp, nacionalidadp, deptonacp, lugarnacimientop, generop, estadofamiliarp, graestp, profp, direccionp, telefonop, emailp, lugartrap, fnacimientop, duip, nitp, zonap, duim, nitm, nombresm, apellidosm, fnacimientom, nacionalidadm, lugarnacimientom, deptonacm, zonam, generom, estadofamiliarm, graestm, profm, direccionm, telefonom, emailm, lugartram, carnet) FROM stdin;
    public       postgres    false    182   ��       n	           0    0    alumnos_idalum_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('alumnos_idalum_seq', 186, true);
            public       postgres    false    181            �          0    20497 
   asignacion 
   TABLE DATA               D   COPY asignacion (idasign, idalum, idmateria, iddocente) FROM stdin;
    public       postgres    false    184   �       o	           0    0    asignacion_idasign_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('asignacion_idasign_seq', 1, false);
            public       postgres    false    183            �          0    20620    departamento 
   TABLE DATA               4   COPY departamento (iddep, departamento) FROM stdin;
    public       postgres    false    199   %�       �          0    20508    docente 
   TABLE DATA               �   COPY docente (iddocente, nombresd, apellidosd, fechanac, generod, especialidad, nacionalidad, depdocente, municipiodocente, telefono, correo, direccion, estado) FROM stdin;
    public       postgres    false    186   ��       p	           0    0    docente_iddocente_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('docente_iddocente_seq', 24, true);
            public       postgres    false    185            �          0    20611    horario 
   TABLE DATA               C   COPY horario (id, nombre, descripcion, horario, fecha) FROM stdin;
    public       postgres    false    198   p�       q	           0    0    horario_id_seq    SEQUENCE SET     6   SELECT pg_catalog.setval('horario_id_seq', 1, false);
            public       postgres    false    197            �          0    20519    inscripcion 
   TABLE DATA               �   COPY inscripcion (idinscripcion, fechaingreso, codinfra, ciclo, anioelectivo, grado, seccion, turno, duir, nitr, nombresr, apellidosr, telefonor, direccionr, idalum) FROM stdin;
    public       postgres    false    188   ��       r	           0    0    inscripcion_idinscripcion_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('inscripcion_idinscripcion_seq', 22, true);
            public       postgres    false    187            �          0    20531    materia 
   TABLE DATA               6   COPY materia (idmateria, materia, idnota) FROM stdin;
    public       postgres    false    190   j�       s	           0    0    materia_idmateria_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('materia_idmateria_seq', 1, false);
            public       postgres    false    189            �          0    20625 	   municipio 
   TABLE DATA               ;   COPY municipio (idmunicipio, municipio, iddep) FROM stdin;
    public       postgres    false    200   ��       �          0    20540    nota 
   TABLE DATA               %   COPY nota (idnota, nota) FROM stdin;
    public       postgres    false    192   ��       t	           0    0    nota_idnota_seq    SEQUENCE SET     7   SELECT pg_catalog.setval('nota_idnota_seq', 1, false);
            public       postgres    false    191            �          0    20548    registro 
   TABLE DATA               8   COPY registro (idregistro, idalum, idasign) FROM stdin;
    public       postgres    false    194   ��       u	           0    0    registro_idregistro_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('registro_idregistro_seq', 1, false);
            public       postgres    false    193            �          0    20556    usuario 
   TABLE DATA               R   COPY usuario (idusuario, nombre, clave, email, nivel, apellido, sexo) FROM stdin;
    public       postgres    false    196   �       v	           0    0    usuario_idusuario_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('usuario_idusuario_seq', 12, true);
            public       postgres    false    195            S           2606    20624    departamento_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY departamento
    ADD CONSTRAINT departamento_pkey PRIMARY KEY (iddep);
 H   ALTER TABLE ONLY public.departamento DROP CONSTRAINT departamento_pkey;
       public         postgres    false    199    199            U           2606    20629    municipio_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY municipio
    ADD CONSTRAINT municipio_pkey PRIMARY KEY (idmunicipio);
 B   ALTER TABLE ONLY public.municipio DROP CONSTRAINT municipio_pkey;
       public         postgres    false    200    200            <           2606    20494 
   pk_alumnos 
   CONSTRAINT     M   ALTER TABLE ONLY alumnos
    ADD CONSTRAINT pk_alumnos PRIMARY KEY (idalum);
 <   ALTER TABLE ONLY public.alumnos DROP CONSTRAINT pk_alumnos;
       public         postgres    false    182    182            A           2606    20502    pk_asignacion 
   CONSTRAINT     T   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT pk_asignacion PRIMARY KEY (idasign);
 B   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT pk_asignacion;
       public         postgres    false    184    184            C           2606    20516 
   pk_docente 
   CONSTRAINT     P   ALTER TABLE ONLY docente
    ADD CONSTRAINT pk_docente PRIMARY KEY (iddocente);
 <   ALTER TABLE ONLY public.docente DROP CONSTRAINT pk_docente;
       public         postgres    false    186    186            Q           2606    20619 
   pk_horario 
   CONSTRAINT     I   ALTER TABLE ONLY horario
    ADD CONSTRAINT pk_horario PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.horario DROP CONSTRAINT pk_horario;
       public         postgres    false    198    198            F           2606    20527    pk_inscripcion 
   CONSTRAINT     \   ALTER TABLE ONLY inscripcion
    ADD CONSTRAINT pk_inscripcion PRIMARY KEY (idinscripcion);
 D   ALTER TABLE ONLY public.inscripcion DROP CONSTRAINT pk_inscripcion;
       public         postgres    false    188    188            I           2606    20536 
   pk_materia 
   CONSTRAINT     P   ALTER TABLE ONLY materia
    ADD CONSTRAINT pk_materia PRIMARY KEY (idmateria);
 <   ALTER TABLE ONLY public.materia DROP CONSTRAINT pk_materia;
       public         postgres    false    190    190            K           2606    20545    pk_nota 
   CONSTRAINT     G   ALTER TABLE ONLY nota
    ADD CONSTRAINT pk_nota PRIMARY KEY (idnota);
 6   ALTER TABLE ONLY public.nota DROP CONSTRAINT pk_nota;
       public         postgres    false    192    192            M           2606    20553    pk_registro 
   CONSTRAINT     S   ALTER TABLE ONLY registro
    ADD CONSTRAINT pk_registro PRIMARY KEY (idregistro);
 >   ALTER TABLE ONLY public.registro DROP CONSTRAINT pk_registro;
       public         postgres    false    194    194            O           2606    20566 
   pk_usuario 
   CONSTRAINT     P   ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk_usuario PRIMARY KEY (idusuario);
 <   ALTER TABLE ONLY public.usuario DROP CONSTRAINT pk_usuario;
       public         postgres    false    196    196            D           1259    20528    idalumno    INDEX     ;   CREATE INDEX idalumno ON inscripcion USING btree (idalum);
    DROP INDEX public.idalumno;
       public         postgres    false    188            =           1259    20503 
   idx_idalum    INDEX     <   CREATE INDEX idx_idalum ON asignacion USING btree (idalum);
    DROP INDEX public.idx_idalum;
       public         postgres    false    184            >           1259    20505    idx_iddocente    INDEX     B   CREATE INDEX idx_iddocente ON asignacion USING btree (iddocente);
 !   DROP INDEX public.idx_iddocente;
       public         postgres    false    184            ?           1259    20504    idx_idmateria    INDEX     B   CREATE INDEX idx_idmateria ON asignacion USING btree (idmateria);
 !   DROP INDEX public.idx_idmateria;
       public         postgres    false    184            G           1259    20537 
   idx_idnota    INDEX     9   CREATE INDEX idx_idnota ON materia USING btree (idnota);
    DROP INDEX public.idx_idnota;
       public         postgres    false    190            V           2606    20567    asignacion_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_1 FOREIGN KEY (idalum) REFERENCES alumnos(idalum) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_1;
       public       postgres    false    184    182    2108            W           2606    20572    asignacion_ibfk_2    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_2 FOREIGN KEY (idmateria) REFERENCES materia(idmateria) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_2;
       public       postgres    false    2121    184    190            X           2606    20577    asignacion_ibfk_3    FK CONSTRAINT     �   ALTER TABLE ONLY asignacion
    ADD CONSTRAINT asignacion_ibfk_3 FOREIGN KEY (iddocente) REFERENCES docente(iddocente) ON UPDATE RESTRICT ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.asignacion DROP CONSTRAINT asignacion_ibfk_3;
       public       postgres    false    184    186    2115            Y           2606    20582    inscripcion_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY inscripcion
    ADD CONSTRAINT inscripcion_ibfk_1 FOREIGN KEY (idalum) REFERENCES alumnos(idalum) ON UPDATE RESTRICT ON DELETE RESTRICT;
 H   ALTER TABLE ONLY public.inscripcion DROP CONSTRAINT inscripcion_ibfk_1;
       public       postgres    false    188    182    2108            Z           2606    20587    materia_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY materia
    ADD CONSTRAINT materia_ibfk_1 FOREIGN KEY (idnota) REFERENCES nota(idnota) ON UPDATE RESTRICT ON DELETE RESTRICT;
 @   ALTER TABLE ONLY public.materia DROP CONSTRAINT materia_ibfk_1;
       public       postgres    false    192    2123    190            ]           2606    20635    municipio_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY municipio
    ADD CONSTRAINT municipio_ibfk_1 FOREIGN KEY (iddep) REFERENCES departamento(iddep) ON UPDATE RESTRICT ON DELETE RESTRICT;
 D   ALTER TABLE ONLY public.municipio DROP CONSTRAINT municipio_ibfk_1;
       public       postgres    false    2131    199    200            [           2606    20592    registro_ibfk_1    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_1 FOREIGN KEY (idalum) REFERENCES alumnos(idalum) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_1;
       public       postgres    false    182    194    2108            \           2606    20597    registro_ibfk_2    FK CONSTRAINT     �   ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_ibfk_2 FOREIGN KEY (idasign) REFERENCES asignacion(idasign) ON UPDATE RESTRICT ON DELETE RESTRICT;
 B   ALTER TABLE ONLY public.registro DROP CONSTRAINT registro_ibfk_2;
       public       postgres    false    194    2113    184            �   T  x��S�n�0<���@�2ėd�*;� .��ɡ�e#�.S�4()@�O=��k~�K�N�&�!�Jwvfv�g�0���	����L��cW؆���	�<�
�9Z�ব�Ȗ��v���iѺiZ����Y@��,�EF��T2JIB����c9�up�����7��x���p;t�ٷ>Fl�m�T�!�%6Ѱ�l�vX�t��T��/۱S���$m�;m'�mH�3u����/��K[X`��:G�� g�ۚ���l�nh^�Ei�KK×����kol�z��9�D��R�Z*S@%t"�M��w���,t6]HEuR
��̊dck<��M7�Q&f�aL]x���C�x<��rj�Ʌ�؅��/HZ�Lj�GB*u�=���$�q�'|��*tH���P��>q���a/����B&��)���		���6�t{T1F��,O�]��ś��G��G��a���|@�Wե���3Q����e�}�|݃�ܦ�i	w�z�z���u`�EU�8�)��R�<�����G'���B�'�2]�b�W2�!;�������:������W��:SM�N4lb!����]U)q���t2��ȋ�B      �      x������ � �      �   �   x��M
�0��{���Q���
��nF*��b�.�M�Pz/V�n>fE��Oxm�Jtؾp�Q9��k���s*���M���BR͝^<>Gݱ�%�V��'|��.X��F$��1h�긫�yc�+��1�Z�f�Fz$��UF�g�ɩu�/�f��<�      �   �  x�m�Mn�0�ףS� ��?�֮���)����,Pđ�B"Җ�ܦ�.s_�#%@�����7o���1�h1�(ѽhi�Am]JU*�4Q��n���a��>&�< (��
����VHl)�~{�p7]����>{��=��%�cL���KL��xG)`�t�i�+\>����#��+Ьr�Ve]�zv�0�2���s�{:���y�y=}7/Y$쾧!cO	n�9Q8��x�<p-U�)J���ܝ�%�V���'I�5��c�[}�k�u�q� m�3�1��1_�<��N�{��܁)e}���W�,-�����*���M������W��5�y~
�F���
���[<�t�}:|9����ڕ�7�j�]}�����O鍸�ON_|�E����      �      x������ � �      �   �   x�mαj�0�Y~
Ag�X�l���������|��>�t(��4��5|d�F��Mb4�3�9]_��rLp��oK]��;F;0����:��"8�\3���7�[��1k��CZˀW�粶�C�N_>z�'�`"+�_R��Dz�C
�}�#��n���Xs��{�8�Evȫ��N�})Ҁ�������ǂIʒ�w�W�R�H8F�      �      x������ � �      �   G	  x�mX=s9��_�p7���3�d�W*��Y���u	4�)��3P��o:��ʙS��{���C�FR�0��|`"�^6�r��֊d���V����?��mԶ���t���^6v
�\,z���;�Fsqe��W�֬.�{/�6�][H���/�7�T�x���7'�Fw�kq����v�v� ��[�T�#}�0�T+Ǉ'�X���q�\<��?!�����{$����^9��IR�w��̎��ll��^3P�kc�dG׃X��^�-�M�Eםf �"�v���V����Q�#d.>릷NK�2�X{�7��0M����B,\#{iY*�b�I��+q�,��UK���h���_YW#@(���W��c)9�!���W;iF��w�4j��n��� �I�0�Q\/�s�a�#��N�����y!n��V�}��$/���"��Q[C즟�2=��f�W�rzfl�D���V����h���?�sq�b;����,K��V7le�s-A�"}.�߱�8Q�⤏H�g/C�*� ��igI<�U���>��Y'w�,R�1�֭l4�'�̺�ON��cMʚ���#m#��|>Ґ3�iUJ�k�Gn�§������ +רU���Q~�����{���@��H�̎2=�I��������{��;K�Ζ{Ve��I��I��_Hףn7��R9�T�܄>}�t��<Qz,G��$E5�!�A����/iEGx9��&ZT&�+�7�V4���W�c՝�v�V��o��,.D��Bn4��l����U��SaC.���瓲��Co0l,��@�^�퀠?pG���(F�+6:�T3n�亀���Ѷ�?�XN��ā�47��bƵ���� ��*�5Ҽr��.��#�e/��S�J��-�&��+��4h�o������Y#[6�T���d���	���O�N�����f�iu�H�XH̨��#6vdE] ت����omw�$�ݿy������>���l&n�kZ��6 �8T\{�4M.R�����#���C�Eu�w�pjvҮ�\L�>�B�\m�z�-#�YGB��r�6�B���;M�JuT<�aDh=B�UuǪanS�9nH�#���Z�wQ9w���Qɞ\2�G����Nv�v����nhjq��w��D;�������j��VbHa)������DP�����?`y	 ��W�0��4����O�@��C����)�7qG)�a��74�	����� LYݙ�ؐA���!��j�j�W��6� ������� �=7��4�%��*��b!����ĳJ����U��@�H�%�l���* )�"@]�D�et�e�����[��W�ɕrqO~R�@@FNn0"�Gn�pT��Ƣ*-�DB�7��E�pT�K�E0Gl�:^�>A���[��ٳ1KG�a ���FD���;A�F��U�g$����ߣ��N(-!���f�"�<�\�6a�?�F+&c$���Z�H��/h�<pI���s*!D{�����\�݂	W��mhO��AaR��x)�h��7cB��<���&,=�>|�d^��xՀ(���۸,���jE�|5�1�.h�����g\Ӏ�Â������P�֭��Q'L5�g�%��Hz���B�WEs#H��d�ܡ����{�e�̀���t	��y�=Z�@d���$R��b��\�U�1����������
h'��`X�ݵ���0���R���,����#GoB�D;�.�X!��&jkݰ����5�Ӫ깚��?����8�_�"��]T*��D �<^&��-��!��Q���܉�mLs<����	��(�lW�)�ޢpO7��^}�e=�A��X�f��ږ^m���gv���!]���9��lH-��?�9���nbrJ�7L��L���P9��!�s��lzq�gp�I� ���z�s�a��	�.���U��E)v�dȹ>>8}-.�L���G�ݻ��y�@4m�4��Ð~yx�[mB��>��?]�)��C����g�9���A�~e�\#$�gx��xo�rq��UDb!����?�J���xIŐ��%�L�^�	0��C�C�$rH��;�4��(D��G�u'�p�uG����,�����E8)�[y0� dǕ t;��ᇏ$P��b�H��7����g'��B����*�[�Y�M��[���jV�;4s9���#r�3;@9"���'�rv���wŧ���wXY, %�����20� p��EFE��.�ȹ�xʢ�z�����F�;=��������<�ʨv8e���/Q�'5r��_'��~	�ŧ���O���?��L&���q      �      x������ � �      �      x������ � �      �   y   x�3�t.�,.�L��4�*H6*�7���r��Lɔ�8��&f��%��rr:�%%��+8'��s�&'��d��sqz���rF�W�$溕Fyx�q&f!i7�J�E����� �!,'     