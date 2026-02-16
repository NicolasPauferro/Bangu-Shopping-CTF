--
-- PostgreSQL database dump
--

\restrict g3N3TWwizAp6JzPjisCKiAjObIES4nwaYYoRGlMnxA8t2j6sMQkaSgC9aByouYE

-- Dumped from database version 18.1
-- Dumped by pg_dump version 18.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET transaction_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: events; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.events (
    id integer NOT NULL,
    event_name text,
    event_date text,
    event_image text
);


ALTER TABLE public.events OWNER TO ctfuser;

--
-- Name: films; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.films (
    id integer NOT NULL,
    film_name text,
    film_image text,
    film_date text
);


ALTER TABLE public.films OWNER TO ctfuser;

--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id INTEGER GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    username text,
    password text,
    role text
);


ALTER TABLE public.users OWNER TO ctfuser;

--
-- Data for Name: events; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.events VALUES (1, 'Bangu Prize Draw', '18 Mar 2026 1:00 PM', './assets/1.png');
INSERT INTO public.events VALUES (2, 'Bangu Carnival', '15 Fev 2026 3:00 PM', './assets/2.png');
INSERT INTO public.events VALUES (3, 'Bangu Jurassic Park', '22 Fev 2026 4:00 PM', './assets/3.png');


--
-- Data for Name: films; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.films VALUES (1, 'Avatar', './assets/avatar.png', '13 Mar 2026 1:00 PM');
INSERT INTO public.films VALUES (2, 'Zootopia 2', './assets/zoo.png', '14 Mar 2026 1:00 PM');
INSERT INTO public.films VALUES (3, 'Destruction', './assets/destruction.png', '17 Mar 2026 3:00 PM');
INSERT INTO public.films VALUES (4, 'The Maid', './assets/maid.png', '18 Mar 2026 4:00 PM');


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.users(username,password,role) VALUES ('admin', 'ba726a7e8e2b5edc18cd8fc15c115cf1', 'admin');
INSERT INTO public.users(username,password,role) VALUES ('nicolas', '4e9f4fae6a16fb3a47391b48c86e6553', 'user');


--
-- Name: events events_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.events
    ADD CONSTRAINT events_pkey PRIMARY KEY (id);


--
-- Name: films films_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.films
    ADD CONSTRAINT films_pkey PRIMARY KEY (id);


GRANT ALL PRIVILEGES ON DATABASE bangushopping TO ctfuser;
GRANT ALL PRIVILEGES ON ALL TABLES IN SCHEMA public TO ctfuser;
GRANT ALL PRIVILEGES ON ALL SEQUENCES IN SCHEMA public TO ctfuser;

--
-- PostgreSQL database dump complete
--

\unrestrict g3N3TWwizAp6JzPjisCKiAjObIES4nwaYYoRGlMnxA8t2j6sMQkaSgC9aByouYE

