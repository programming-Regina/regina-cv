new Vue({
    el: '#greet',
    data: {
        english: false,
        saludo_sp: '¡Bienvenidos!<br/>Soy Regina.',
        saludo_en: 'Hello, WORLD!<br/>I\'m Regina.',
        cargo_sp: 'Desarrolladora Fullstack',
        cargo_en: 'Fullstack Developer',
        sobre_mi: 'Hola! Mi nombre es Regina Molares y soy programadora Full-Stack. Me considero una persona analítica, de espíritu atrevido e investigador, con habilidad para la búsqueda de soluciones. Proteccionista, ávida lectora, autodidacta, amante del jazz y el cine. INTJ. Los invito a conocer más sobre mí y mi trabajo.',
        about_me: 'Hi. My name is Regina Molares and I\'m a Full-Stack Developer. I consider myself as an analytical person, with a daring and investigative spirit, skilled in finding solutions. I am an animal lover, avid reader, self-taught, fan of jazz and films. INTJ. You\'re invited to discover more about me and my work',
        education_sp: [
                ['(2021 - Actualidad)', 'GCBA-IFTS 20', 'Tecnicatura Superior en Automatización y Robótica'],
                ['(2020)', 'GCBA', 'Plan Codo a Codo - Full-Stack PHP'],
                ['(2020)', 'GCBA', 'Plan Codo a Codo - Full-Stack Python'],
                ['(2020)', 'Beca ASAPP', 'Python Orientado a Data Science'],
                ['(2020)', 'CertiProf', 'SCRUM Foundation Professional Certificate (SFPC)'],
                ['(2019)', 'MindHub / GCBA-CFP 10', 'Programador Full-Stack (Bootcamp - 200 hs)'],
                ['(2018 - Actualidad)', 'GCBA-IFTS 21', 'Tecnicatura Superior en Análisis de Sistemas'],
                ['(2017)', 'GCBA', 'Plan Codo a Codo - Desarrollador Java - Certificación Analista del Conocimiento, dimensión Programador del Plan 111 Mil'],
                ['(2000-2004 inconcluso)', 'Universidad Tecnológica Nacional', 'Ingeniería en Sistemas de Información']
            ],
        education_en: [
                ['(2021 - Present)', 'GCBA-IFTS 20', 'Higher Degree in Automation & Robotics'],
                ['(2020)', 'GCBA', 'Codo a Codo Program - Full-Stack Developer - PHP'],
                ['(2020)', 'GCBA', 'Codo a Codo Program - Full-Stack Developer - Python'],
                ['(2020)', 'ASAPP Scholarship', 'Python for Data Science'],
                ['(2020)', 'CertiProf', 'SCRUM Foundation Professional Certificate (SFPC)'],
                ['(2019)', 'MindHub / GCBA-CFP 10', 'Full-Stack Developer - Java (Bootcamp - 200 hs)'],
                ['(2018 - Present)', 'GCBA-IFTS 21', 'Higher Degree in Systems Analysis'],
                ['(2017)', 'GCBA', 'Codo a Codo Program - Java Developer'],
                ['(2000-2004 incomplete)', 'National Technological University - Bs As', 'Engineering in Information Systems']
            ],
        skills_en: [
                ['Techniques', 'Algorithmics, Structured & OOP.'],
                ['Technologies', 'HTML, CSS, JS, Bootstrap, Tailwind, Materialize, Vue.JS, PHP, Python, Java, SQL.'],
                ['Languages', 'Spanish: Native speaker.<br>English: <a href="https://www.jobline.uni-muenchen.de/app_language/describing_language_skills/index.html" target="_BLANK" style = "background-color:rgb(25, 236, 25);color: rgb(0,0,0); padding: 2px; border-radius: 5px;">CEFR</a> proficiency level: C1 writing / B1 spoken.<br>French: A1 CEFR proficiency level.'],
                ['Soft skills', 'Problem-solving skills, proactivity, self-management and self-taught.']
            ],
        skills_sp: [
                ['Técnicas', 'Algoritmia, POO y estructurada.'],
                ['Tecnologías', 'HTML, CSS, JS, Bootstrap, Tailwind, Materialize, Vue.JS, PHP, Python, Java, SQL.'],
                ['Idiomas', 'Español: Nativo.<br>Inglés: Nivel de competencia <a href="https://www.jobline.uni-muenchen.de/app_language/describing_language_skills/index.html" target="_BLANK" style = "background-color:rgb(25, 236, 25);color: rgb(0,0,0); padding: 2px; border-radius: 5px;">CEFR</a>: escritura nivel C1 / conversación nivel B1.<br>Francés: Nivel A1 CEFR.'],
                ['Habilidades blandas', 'Habilidades para resolución de problemas, proactividad, autogestión y autodidacta.']
            ],
        experience_en: [
                ['Freelance (Present)', 'Full-Stack Web Developer'],
                ['Fox IT (2020 - Present)','Content creation, teacher on synchronous / online courses, student list management, homework correction.'],
                ['Jobs not related to IT field','Secretary, private collections inventory and cataloging (2 years - present)<br>Personal assistant, secretary (23 years).<br>Secretary of the presidency (LANDACO S.A.I.C. - 2 years).<br>Administrative secretary (Ser Sistemas Generales/NOR-ARG S.A. - 2 years).<br>Administrative employee (Cerámica SCOP S.A. - 1 year)']
            ],
        experience_sp: [
                ['Freelance (Actualidad)', 'Desarrollo Web Front-End'],
                ['Fox IT (2020 - Actualidad)', 'Creación de contenidos, dictado de clases sincrónicas/online, administración alumnos, corrección de trabajos.'],
                ['No relacionada con el ámbito IT', 'Secretaria, inventario y catalogación de colecciones privadas (2 años - actualidad).<br>Asistente personal, secretaria (23 años).<br>Secretaria de presidencia (LANDACO S.A.I.C. - 2 años).<br>Secretaria Administrativa (Ser Sistemas Generales/NOR-ARG S.A. - 2 años).<br>Cadete administrativa (Cerámica SCOP S.A. - 1 año)']
            ]
    },
    methods: {
        toggle_lng: function () {
            if (this.english === true) {
                this.english = false;
            } else {
                this.english = true;
            }
        },
    },
})