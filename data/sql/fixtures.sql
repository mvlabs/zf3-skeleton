--
-- Data for Name: country; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO country VALUES (1, 'it', 'Italy', 'italy');
INSERT INTO country VALUES (2, 'gb', 'United Kingdom', 'united-kingdom');

--
-- Name: country_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('country_id_seq', 1, false);

--
-- Data for Name: event; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO event VALUES (1, 1, 'PhpDay 2017', 'The italian PHP conference', '2017-05-17 00:00:00', '2017-05-18 00:00:00', 'Verona', 'San Marco Hotel', 180, 'http://2017.phpday.it/');
INSERT INTO event VALUES (2, 1, 'JsDay 2017', 'The most used language, the most needed conference', '2017-05-15 00:00:00', '2017-05-16 00:00:00', 'Verona', 'Hotel San Marco', 180, 'http://2017.jsday.it/');
INSERT INTO event VALUES (3, 2, 'Another conference...', 'A really interesting conf...', '2017-05-15 00:00:00', '2017-05-16 00:00:00', 'London', 'University of London', 180, 'http://www.google.com/');

--
-- Name: event_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--
SELECT pg_catalog.setval('event_id_seq', 5, true);