<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $services = [
        'diseno-elementos-estructurales' => [
            'title' => 'Constructora Perú | Diseño Estructural Profesional Lima',
            'meta_description' => 'Constructora Perú con diseño estructural para obras civiles y edificaciones seguras. Cotiza en Lima y recibe cálculos sísmicos, optimización de materiales y soporte.',
            'h1' => 'Diseño y Cálculo de Elementos Estructurales de Alta Precisión',
            'description' => '<p>En <strong>Argentoni Constructora</strong>, entendemos que la estructura es el esqueleto vital de cualquier edificación. Nuestro servicio de <strong>Diseño de Elementos Estructurales</strong> combina la ingeniería avanzada con la innovación tecnológica para garantizar la seguridad, estabilidad y longevidad de sus proyectos.</p>
            
            <p>Utilizamos metodologías de cálculo de vanguardia y software de última generación para modelar, analizar y diseñar estructuras que no solo cumplen con las normativas locales e internacionales más exigentes, sino que también optimizan el uso de materiales, reduciendo costos sin comprometer la integridad estructural. Desde cimentaciones profundas hasta sistemas de contención y superestructuras complejas, nuestro equipo de ingenieros estructurales altamente capacitados aborda cada desafío con rigor técnico y creatividad.</p>
            
            <p>Nuestro enfoque se centra en la <strong>resiliencia sísmica</strong>, un aspecto crítico en nuestra región. Desarrollamos soluciones que aseguran el comportamiento óptimo de la edificación ante eventos sísmicos, protegiendo tanto la inversión como, lo más importante, la vida de los ocupantes. Además, integramos el diseño estructural con otras disciplinas (arquitectura, instalaciones) desde las etapas tempranas mediante metodología BIM (Building Information Modeling), lo que nos permite anticipar conflictos, mejorar la coordinación y agilizar el proceso constructivo.</p>
            
            <p>Ya sea para proyectos residenciales, comerciales, industriales o de infraestructura pública, nuestro compromiso es entregar diseños estructurales que sean sinónimo de confianza y excelencia técnica. Transformamos los desafíos arquitectónicos en soluciones estructurales viables, eficientes y seguras.</p>',
            'features' => [
                'Análisis y diseño sísmico avanzado según normativa vigente.',
                'Modelado 3D y coordinación BIM para detección de interferencias.',
                'Optimización estructural para reducción de costos en materiales.',
                'Diseño de cimentaciones superficiales y profundas.',
                'Reforzamiento y rehabilitación de estructuras existentes.',
                'Memorias de cálculo detalladas y planos constructivos precisos.'
            ],
            'benefits' => [
                'Seguridad Estructural: Garantía de estabilidad y resistencia ante cargas y sismos.',
                'Eficiencia de Costos: Diseños optimizados que evitan el desperdicio de materiales.',
                'Cumplimiento Normativo: Adherencia estricta a los reglamentos de construcción.',
                'Durabilidad: Soluciones pensadas para maximizar la vida útil de la edificación.',
                'Innovación Técnica: Uso de las últimas tecnologías en ingeniería estructural.'
            ],
            'image' => 'https://x02.me/i/FUB9ZF.jpg',
            'image_alt' => 'Ingenieros analizando planos estructurales en obra',
            'testimonial' => [
                'quote' => 'El diseño estructural de Argentoni nos permitió optimizar la cimentación de nuestro edificio corporativo, ahorrando un 15% en concreto sin sacrificar seguridad. Su nivel de detalle es impresionante.',
                'author' => 'Ing. Roberto Méndez',
                'position' => 'Gerente de Proyectos, Inmobiliaria Horizonte'
            ]
        ],
        'diseno-instalaciones-sanitarias' => [
            'title' => 'Constructora Perú | Diseño Sanitario Profesional Lima',
            'meta_description' => 'Constructora Perú con diseño sanitario para agua, desagüe y sistemas contra incendio. Cotiza en Lima y asegura eficiencia, seguridad y cumplimiento normativo regional.',
            'h1' => 'Diseño Integral de Instalaciones Sanitarias Eficientes',
            'description' => '<p>El agua es un recurso vital, y su correcta gestión dentro de una edificación es fundamental para la salud, el confort y la sostenibilidad. En <strong>Argentoni Constructora</strong>, ofrecemos un servicio completo de <strong>Diseño de Instalaciones Sanitarias</strong>, enfocado en crear sistemas hidráulicos y sanitarios que funcionen de manera eficiente, silenciosa y segura a lo largo del tiempo.</p>
            
            <p>Nuestro equipo de especialistas desarrolla proyectos integrales que abarcan desde el suministro de agua potable (fría y caliente) hasta la evacuación segura de aguas residuales y pluviales. Nos aseguramos de calcular con precisión los caudales y presiones necesarios para garantizar un suministro constante en todos los puntos de consumo, utilizando tecnologías que promueven el ahorro de agua y la eficiencia energética. Diseñamos sistemas de bombeo, tanques de almacenamiento y redes de distribución optimizadas para cada tipo de edificación.</p>
            
            <p>Además, nos especializamos en sistemas de protección contra incendios, diseñando redes de agua contra incendio (gabinetes, rociadores) que cumplen con las normativas de seguridad más estrictas (NFPA, RNE). Entendemos la importancia de la prevención y la respuesta rápida ante emergencias, por lo que integramos estos sistemas de manera armónica con el resto de la infraestructura del edificio.</p>
            
            <p>Nuestra filosofía de diseño también contempla el tratamiento y reúso de aguas grises y pluviales para riego o servicios sanitarios, contribuyendo a la certificación de edificios verdes (LEED, EDGE) y reduciendo el impacto ambiental de nuestros proyectos. Entregamos planos detallados, especificaciones técnicas y memorias descriptivas que facilitan una instalación sin contratiempos en obra.</p>',
            'features' => [
                'Diseño de redes de agua fría, caliente y retorno.',
                'Sistemas de desagüe y ventilación sanitaria eficiente.',
                'Redes de agua contra incendio (RCI) y rociadores automáticos.',
                'Sistemas de bombeo y presión constante.',
                'Plantas de tratamiento de aguas residuales y sistemas de reúso.',
                'Drenaje pluvial y gestión de aguas de lluvia.'
            ],
            'benefits' => [
                'Salud y Confort: Garantía de suministro y evacuación higiénica.',
                'Sostenibilidad: Tecnologías para el ahorro y reúso de agua.',
                'Seguridad: Sistemas contra incendios confiables y normados.',
                'Bajo Mantenimiento: Diseños que minimizan obstrucciones y averías.',
                'Valor Agregado: Instalaciones modernas que valorizan la propiedad.'
            ],
            'image' => 'https://x02.me/i/4RZE.jpg',
            'image_alt' => 'Planos de instalaciones sanitarias y tuberías',
            'testimonial' => [
                'quote' => 'La propuesta sanitaria de Argentoni solucionó nuestros problemas de presión de agua en el complejo residencial. Un trabajo técnico impecable y muy profesional.',
                'author' => 'Arq. Lucía Fernández',
                'position' => 'Directora de Obras, Constructora del Sur'
            ]
        ],
        'ajustes-poligonales-topograficas' => [
            'title' => 'Constructora Perú | Topografía y Poligonales Precisión Lima',
            'meta_description' => 'Constructora Perú con topografía de precisión y ajustes de poligonales. Cotiza en Lima y asegura georreferenciación confiable para tu obra civil en Perú hoy.',
            'h1' => 'Ajustes de Poligonales Topográficas y Geodesia de Precisión',
            'description' => '<p>La base de cualquier proyecto de construcción exitoso es una topografía precisa. En <strong>Argentoni Constructora</strong>, nuestro servicio de <strong>Ajustes de Poligonales Topográficas</strong> proporciona la certeza geométrica necesaria para que su obra se ejecute exactamente donde y como fue planeada. Utilizamos tecnología de vanguardia y metodologías rigurosas para garantizar la máxima exactitud en el posicionamiento de puntos de control.</p>
            
            <p>Realizamos el establecimiento y ajuste de redes de control geodésico y topográfico, fundamentales para proyectos de gran envergadura como carreteras, presas, minería y urbanizaciones extensas. Mediante el uso de Estaciones Totales de alta precisión, niveles digitales y receptores GNSS (GPS) de doble frecuencia, capturamos datos con exactitud milimétrica. Luego, procesamos esta información utilizando software especializado para realizar el ajuste de poligonales por el método de mínimos cuadrados, eliminando errores sistemáticos y asegurando el cierre geométrico perfecto.</p>
            
            <p>Este servicio es crucial para evitar costosos errores de replanteo durante la construcción, conflictos de linderos y problemas legales relacionados con la ubicación de la propiedad. Entregamos informes técnicos detallados, planos topográficos con curvas de nivel, perfiles longitudinales y transversales, y modelos digitales del terreno (MDT) que sirven como base confiable para el diseño de ingeniería y arquitectura.</p>
            
            <p>Nuestro equipo de topógrafos y geodestas certificados cuenta con amplia experiencia en terrenos complejos y condiciones desafiantes, asegurando resultados confiables en cualquier entorno. Ya sea para un levantamiento inicial, control de obra o monitoreo de deformaciones, Argentoni es su aliado en precisión espacial.</p>',
            'features' => [
                'Levantamientos topográficos de alta precisión.',
                'Ajuste de poligonales cerradas y abiertas por mínimos cuadrados.',
                'Georreferenciación con receptores GNSS (GPS Diferencial).',
                'Nivelación geométrica de precisión.',
                'Generación de Modelos Digitales de Terreno (MDT).',
                'Replanteo de obras civiles y edificaciones.'
            ],
            'benefits' => [
                'Precisión Milimétrica: Base sólida para el diseño y construcción.',
                'Seguridad Legal: Definición exacta de linderos y áreas.',
                'Ahorro en Obra: Prevención de errores de ubicación y niveles.',
                'Tecnología Avanzada: Uso de equipos de última generación.',
                'Documentación Completa: Planos y reportes listos para trámites.'
            ],
            'image' => 'https://x02.me/i/5FR6T.avif',
            'image_alt' => 'Topógrafo realizando mediciones con estación total',
            'testimonial' => [
                'quote' => 'Contratamos a Argentoni para el control topográfico de nuestra carretera y la precisión de sus poligonales fue clave para el éxito del proyecto. Altamente recomendados.',
                'author' => 'Ing. Carlos Ruiz',
                'position' => 'Jefe de Topografía, Vialidad Nacional'
            ]
        ],
        'diseno-viales' => [
            'title' => 'Constructora Perú | Diseño Vial Profesional Seguro Lima',
            'meta_description' => 'Constructora Perú especializada en diseño vial para carreteras y vías urbanas. Cotiza en Lima y optimiza drenaje, seguridad y trazado regional con enfoque técnico.',
            'h1' => 'Diseño Vial Integral para Carreteras y Vías Urbanas',
            'description' => '<p>Una vía bien diseñada garantiza seguridad, fluidez y durabilidad. En <strong>Argentoni Constructora</strong>, desarrollamos el <strong>Diseño Vial</strong> con enfoque integral, considerando la movilidad, el entorno y la sostenibilidad del proyecto desde sus primeras etapas.</p>
            
            <p>Realizamos el diseño geométrico completo con criterios de velocidad de operación, radios de curvatura, peraltes y visibilidad, además de definir secciones tipo optimizadas para cada tramo. Complementamos el diseño con el estudio de drenaje, señalización y dispositivos de seguridad vial para minimizar riesgos y mejorar la experiencia de conducción.</p>
            
            <p>Nuestro equipo integra herramientas avanzadas de modelado y coordinación con topografía y geotecnia, lo que permite entregar planos, metrados y memorias consistentes, listos para ejecución en obra.</p>',
            'features' => [
                'Estudios de tránsito y capacidad vial.',
                'Diseño geométrico de alineamientos horizontal y vertical.',
                'Secciones tipo, bermas, sobreanchos y accesos.',
                'Diseño de drenaje superficial y subdrenaje.',
                'Señalización y dispositivos de seguridad vial.',
                'Modelado y entrega de planos con criterios BIM.'
            ],
            'benefits' => [
                'Seguridad Operacional: Vías diseñadas para reducir riesgos de siniestros.',
                'Fluidez del Tráfico: Alineamientos que optimizan la movilidad.',
                'Durabilidad: Soluciones que prolongan la vida útil de la vía.',
                'Compatibilidad Normativa: Cumplimiento de normas locales y AASHTO.',
                'Ejecución Eficiente: Planos y metrados listos para construcción.'
            ],
            'image' => 'https://x02.me/i/J7QV.jpg',
            'image_alt' => 'Carretera moderna en zona urbana',
            'testimonial' => [
                'quote' => 'El diseño vial de Argentoni optimizó nuestro proyecto urbano y mejoró significativamente la seguridad en intersecciones críticas.',
                'author' => 'Ing. Andrea Salazar',
                'position' => 'Coordinadora de Infraestructura, Municipalidad Metropolitana'
            ]
        ],
        'diseno-aceros' => [
            'title' => 'Constructora Perú | Aceros Estructurales Profesionales Lima',
            'meta_description' => 'Constructora Perú con ingeniería de aceros estructurales y planos de taller. Cotiza en Lima y asegura conexiones seguras y montaje eficiente para tu proyecto.',
            'h1' => 'Diseño de Estructuras de Acero Seguras y Optimizadas',
            'description' => '<p>Las estructuras de acero requieren precisión y control en cada detalle. En <strong>Argentoni Constructora</strong> brindamos el <strong>Diseño de Aceros</strong> con el objetivo de maximizar la eficiencia estructural y asegurar un montaje ágil en obra.</p>
            
            <p>Realizamos el dimensionamiento de perfiles, la verificación de uniones y la coordinación con arquitectura e instalaciones. Nuestro enfoque integra modelado 3D para detectar interferencias, optimizar pesos y garantizar compatibilidad con los procesos de fabricación y montaje.</p>
            
            <p>Entregamos planos de taller y de montaje, memorias de cálculo y especificaciones técnicas que cumplen con normativa vigente, asegurando resultados confiables y competitivos.</p>',
            'features' => [
                'Cálculo y selección de perfiles estructurales.',
                'Diseño de conexiones soldadas y atornilladas.',
                'Modelado 3D para coordinación y fabricación.',
                'Optimización de peso y consumo de acero.',
                'Planos de taller y de montaje detallados.',
                'Revisión y cumplimiento normativo.'
            ],
            'benefits' => [
                'Montaje Ágil: Detallado preciso que reduce retrabajos.',
                'Optimización de Costos: Menor peso sin perder seguridad.',
                'Seguridad Estructural: Verificaciones con normas vigentes.',
                'Compatibilidad BIM: Coordinación con otras disciplinas.',
                'Calidad en Fabricación: Planos listos para taller.'
            ],
            'image' => 'https://x02.me/i/AFMJJ.jpg',
            'image_alt' => 'Estructura metálica en montaje',
            'testimonial' => [
                'quote' => 'Con el diseño de aceros de Argentoni reducimos tiempos de fabricación y logramos un montaje impecable.',
                'author' => 'Ing. Marcelo Torres',
                'position' => 'Jefe de Producción, Metalúrgica Andina'
            ]
        ],
        'levantamiento-geometrico-fotogrametria' => [
            'title' => 'Constructora Perú | Fotogrametría y Drones Precisión Lima',
            'meta_description' => 'Constructora Perú con fotogrametría y drones para levantamientos 3D. Cotiza en Lima y recibe ortofotos, nubes de puntos y modelos precisos para obra civil hoy.',
            'h1' => 'Levantamiento Geométrico Mediante Fotogrametría de Alta Precisión',
            'description' => '<p>La fotogrametría permite capturar grandes áreas con rapidez y precisión. En <strong>Argentoni Constructora</strong>, ofrecemos el <strong>Levantamiento Geométrico mediante Fotogrametría</strong> para proyectos que requieren información confiable y georreferenciada.</p>
            
            <p>Planificamos vuelos con drones profesionales, implementamos puntos de control en campo y procesamos la información para generar ortomosaicos, nubes de puntos y modelos 3D. Esto facilita el análisis topográfico, la detección de volúmenes y la planificación de obras.</p>
            
            <p>Entregamos productos cartográficos listos para uso en diseño y ejecución, compatibles con plataformas CAD y GIS.</p>',
            'features' => [
                'Planificación de vuelos y puntos de control GCP.',
                'Captura con drones de alta resolución y RTK.',
                'Generación de ortomosaicos georreferenciados.',
                'Nubes de puntos y modelos 3D detallados.',
                'Curvas de nivel y MDT.',
                'Entrega de reportes y archivos CAD/GIS.'
            ],
            'benefits' => [
                'Rapidez de Campo: Cobertura amplia en menos tiempo.',
                'Precisión Geométrica: Datos listos para diseño.',
                'Reducción de Costos: Menos jornadas de levantamiento.',
                'Visualización 3D: Mejor análisis y comunicación.',
                'Compatibilidad: Integración directa en CAD y BIM.'
            ],
            'image' => 'https://x02.me/i/PUUD.jpg',
            'image_alt' => 'Dron realizando levantamiento fotogramétrico',
            'testimonial' => [
                'quote' => 'La fotogrametría de Argentoni nos dio un modelo 3D preciso y aceleró el diseño del proyecto.',
                'author' => 'Arq. Paola Villanueva',
                'position' => 'Coordinadora BIM, Estudio Urbano'
            ]
        ],
        'diseno-instalaciones-electricas' => [
            'title' => 'Constructora Perú | Diseño Eléctrico Profesional Lima',
            'meta_description' => 'Constructora Perú con diseño eléctrico para edificaciones seguras y eficientes. Cotiza en Lima y asegura tableros, cargas y protección normativa para tu obra.',
            'h1' => 'Diseño de Instalaciones Eléctricas Seguras y Eficientes',
            'description' => '<p>Un sistema eléctrico confiable es clave para la operación de cualquier edificio. En <strong>Argentoni Constructora</strong>, desarrollamos el <strong>Diseño de Instalaciones Eléctricas</strong> para garantizar seguridad, eficiencia energética y continuidad de servicio.</p>
            
            <p>Calculamos cargas y demandas, dimensionamos conductores, tableros y protecciones, e integramos soluciones de iluminación interior y exterior. Nuestro diseño considera la coordinación con otras especialidades para evitar interferencias y asegurar una instalación ordenada y eficiente.</p>
            
            <p>Entregamos planos, diagramas unifilares, memorias de cálculo y especificaciones que cumplen normativa técnica vigente.</p>',
            'features' => [
                'Cálculo de cargas, demanda y factor de simultaneidad.',
                'Diseño de tableros, circuitos y canalizaciones.',
                'Iluminación interior, exterior y de emergencia.',
                'Puesta a tierra y sistemas de protección.',
                'Coordinación multidisciplinaria en BIM.',
                'Planos y memorias de cálculo completas.'
            ],
            'benefits' => [
                'Seguridad Eléctrica: Protección adecuada para usuarios y equipos.',
                'Eficiencia Energética: Diseño optimizado y sostenible.',
                'Continuidad Operativa: Sistemas confiables y bien dimensionados.',
                'Compatibilidad Normativa: Cumplimiento de reglamentos y códigos.',
                'Implementación Clara: Documentación lista para obra.'
            ],
            'image' => 'https://x02.me/i/2D8D8.jpg',
            'image_alt' => 'Ingeniero revisando planos eléctricos',
            'testimonial' => [
                'quote' => 'El diseño eléctrico de Argentoni fue preciso y nos permitió reducir consumos sin comprometer la operación.',
                'author' => 'Ing. Felipe Rojas',
                'position' => 'Supervisor de Mantenimiento, Centro Empresarial Sur'
            ]
        ],
        'mecanica-suelos-pavimentos' => [
            'title' => 'Constructora Perú | Estudios Geotécnicos y Pavimentos Lima',
            'meta_description' => 'Constructora Perú con estudios geotécnicos y diseño de pavimentos. Cotiza en Lima y recibe recomendaciones seguras para obras civiles con enfoque regional.',
            'h1' => 'Mecánica de Suelos y Diseño de Pavimentos Confiable',
            'description' => '<p>El comportamiento del suelo define la seguridad de una obra. En <strong>Argentoni Constructora</strong>, brindamos el servicio de <strong>Mecánica de Suelos y Pavimentos</strong> con estudios rigurosos de campo y laboratorio.</p>
            
            <p>Ejecutamos sondeos, calicatas y ensayos especializados para determinar la capacidad portante y parámetros geotécnicos. Con base en estos resultados, elaboramos recomendaciones de cimentación y el diseño estructural de pavimentos flexibles o rígidos, optimizando costos y desempeño.</p>
            
            <p>Nuestros informes técnicos cumplen normativa y entregan soluciones claras para la toma de decisiones en obra.</p>',
            'features' => [
                'Sondeos SPT, calicatas y muestreo inalterado.',
                'Ensayos de laboratorio de suelos y agregados.',
                'Determinación de parámetros geotécnicos.',
                'Diseño de pavimentos flexibles y rígidos.',
                'Recomendaciones de cimentación y estabilización.',
                'Informes geotécnicos completos y normados.'
            ],
            'benefits' => [
                'Seguridad Geotécnica: Fundaciones con respaldo técnico.',
                'Durabilidad Vial: Pavimentos diseñados para su tránsito.',
                'Optimización de Costos: Soluciones ajustadas a la realidad del suelo.',
                'Reducción de Riesgos: Identificación temprana de problemas.',
                'Decisiones Confiables: Informes claros y ejecutables.'
            ],
            'image' => 'https://x02.me/i/HGZC6J.jpg',
            'image_alt' => 'Ensayos de suelo en laboratorio',
            'testimonial' => [
                'quote' => 'El estudio de suelos y pavimentos de Argentoni nos dio seguridad para definir la estructura vial con confianza.',
                'author' => 'Ing. Daniela Paredes',
                'position' => 'Gerente de Obra, Consorcio Vial Andino'
            ]
        ]
    ];

    public function show($slug)
    {
        if (!array_key_exists($slug, $this->services)) {
            abort(404);
        }

        $service = $this->services[$slug];
        $services = $this->services;
        return view('servicios.show', compact('service', 'services', 'slug'));
    }

    public function equipos()
    {
        $products = [
            [
                'name' => 'ESTACIÓN TOTAL LEICA TC305',
                'category' => 'Estaciones Totales y Teodolitos',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/5/53/Leica_TC305_total_station.JPG',
                'features' => [
                    'Aumento óptico de 30x con imagen erecta',
                    'Precisión angular de 5" (1.5 mgon)',
                    'Alcance de medición: hasta 2,500 m con prisma simple',
                    'Precisión de distancia: ±(2 mm + 2 ppm)',
                    'Compensador automático de doble eje',
                    'Memoria interna para hasta 8,000 puntos'
                ]
            ],
            [
                'name' => 'RECEPTOR GNSS RTK SOUTH GALAXY G1',
                'category' => 'GPS/GNSS y Sistemas RTK',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/b/be/Surveyor_Using_GNSS_Receiver_with_RTK_Solution.jpg',
                'features' => [
                    'Precisión RTK: ±(8 mm + 1 ppm) en planimetría',
                    'Constelaciones GPS, GLONASS, BeiDou y Galileo',
                    'Inicialización RTK en 2 a 8 segundos',
                    'Protección IP67 contra agua y polvo',
                    'Hasta 7 horas de autonomía en modo estático',
                    'Diseño compacto: 970 g con batería incluida'
                ]
            ],
            [
                'name' => 'GPS GARMIN 73',
                'category' => 'GPS/GNSS y Sistemas RTK',
                'image' => 'https://x02.me/i/BSHV.png', // Placeholder or generic
                'features' => [
                    'Guarde hasta 1000 puntos (Waypoints)',
                    'Registra 10,000 puntos de tracks',
                    'Resistencia al agua IPX7 (flota en el agua)',
                    'Hasta 18 horas de autonomía',
                    'Funciona con dos pilas AA',
                    'Equipo compacto, práctico y confiable'
                ]
            ],
            [
                'name' => 'NIVEL INGENIERO AT-B3A',
                'category' => 'Niveles Ópticos y Láser',
                'image' => 'https://x02.me/i/XX9KF.webp', // Placeholder
                'features' => [
                    'Aumento óptico: 28x',
                    'Precisión: ±1.5 mm en 1km doble nivelación',
                    'Compensador automático magnético rápido',
                    'Resistencia al agua y polvo IPX6',
                    'Enfoque mínimo ultra-corto de 20 cm',
                    'Círculo horizontal para medición de ángulos'
                ]
            ],
            [
                'name' => 'ESCÁNER LÁSER 3D LEICA BLK360',
                'category' => 'Escáneres 3D y Captura de Realidad',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/3b/Leica_3D-Laserscanner_Blockform2.jpg',
                'features' => [
                    'Alcance de escaneo: de 0.6 m a 60 m',
                    'Precisión de 6 mm a 10 m de distancia',
                    'Campo de visión: 360° horizontal / 300° vertical',
                    'Captura de hasta 360,000 puntos por segundo',
                    'Escaneo esférico completo en menos de 3 minutos',
                    'Incluye fotografía esférica HDR e imagen térmica'
                ]
            ],
            [
                'name' => 'AGISOFT METASHAPE PROFESSIONAL',
                'category' => 'Software y Procesamiento',
                'badge' => 'Licencia Disponible',
                'note' => 'Imagen ilustrativa: nube de puntos generada por fotogrametría',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/47/3D_point_cloud_statue_Pentti_Eskola_Ladimo_technology.jpg',
                'features' => [
                    'Procesamiento fotogramétrico de imágenes de drones',
                    'Generación de nubes de puntos densas y mallas 3D',
                    'Clasificación automática de nubes de puntos',
                    'Exportación de ortomosaicos georreferenciados y MDT',
                    'Procesamiento en red para proyectos de gran tamaño',
                    'API de Python para flujos de trabajo automatizados'
                ]
            ],
            [
                'name' => 'TRIMBLE BUSINESS CENTER',
                'category' => 'Software y Procesamiento',
                'badge' => 'Licencia Disponible',
                'note' => 'Imagen ilustrativa: modelo digital de terreno procesado',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/0b/Bury_Camp_Digital_Terrain_Model.jpg',
                'features' => [
                    'Procesamiento de datos GNSS, estación total y nivelación',
                    'Ajuste de poligonales y redes de control',
                    'Compatible con datos de drones y escáneres láser',
                    'Postproceso GNSS estático con motor HD-GNSS',
                    'Edición y depuración de observaciones RTK',
                    'Generación de modelos constructibles para obra'
                ]
            ],
            [
                'name' => 'TRIPODE TOPCON TP 110',
                'category' => 'Accesorios y Repuestos',
                'image' => 'https://x02.me/i/ADZAF.jpg', // Placeholder
                'features' => [
                    'Cabezal plano de aluminio',
                    'Altura extendida: 170 cm',
                    'Altura cerrado: 100 cm',
                    'Peso ligero y alta durabilidad',
                    'Sistema de doble bloqueo (rápido y tornillo)',
                    'Ideal para niveles ópticos y láseres'
                ]
            ],
            [
                'name' => 'PRISMA LEICA GPR111',
                'category' => 'Accesorios y Repuestos',
                'image' => 'https://x02.me/i/8PENW9.jpg', // Placeholder
                'features' => [
                    'Prisma circular básico con soporte',
                    'Constante de prisma: 0 mm',
                    'Alcance hasta 2500 m',
                    'Montaje fácil en bastón',
                    'Alta precisión de centrado',
                    'Incluye señal de puntería integrada'
                ]
            ],
            [
                'name' => 'BOSCH REGLA TOPOGRÁFICO - GR 500',
                'category' => 'Accesorios y Repuestos',
                'image' => 'https://x02.me/i/9JH8T.webp',
                'features' => [
                    'Mira nivel óptico regla medición 5 m',
                    'Perfil de aluminio robusto y de alta calidad',
                    'Extensible hasta 500 cm',
                    'Alto 120 cm',
                    'Ancho 6 cm',
                    'Indicada para nivel óptico automático GOL 26 D Professional',
                    'Para la aplicación incluso en condiciones extremas',
                    'Incluye: regla medición Bosch GR 500',
                    'Nivel de burbuja esférico',
                    'Bolsa de protección',
                    'Para todas las medidas de alturas de piso'
                ]
            ],
            [
                'name' => 'DJI Air 2S',
                'category' => 'Fotogrametría Aérea',
                'image' => 'https://x02.me/i/HYCVN.jpg',
                'specs' => [
                    'Especificaciones técnicas' => [
                        'Peso al despegue: 595 g',
                        'Dimensiones plegado: 180 × 97 × 77 mm',
                        'Dimensiones desplegado: 183 × 253 × 77 mm',
                        'Velocidad máxima de vuelo: 19 m/s',
                        'Velocidad ascenso/descenso: 6 m/s',
                        'Altitud máxima de vuelo: hasta 5000 msnm',
                        'Memoria interna: 8 GB',
                        'Resistencia máxima al viento: hasta 10.7 m/s',
                        'Sistema GNSS: GPS + GLONASS + GALILEO',
                        'Distancia máxima de transmisión: hasta 8 km'
                    ],
                    'Cámara y Sensor' => [
                        'Sensor CMOS de 1″ de 20 MP',
                        'Tamaño de píxel: 2.4 µm',
                        'Lente: FOV 88° / 35 mm equivalente ~22 mm / Apertura f/2.8',
                        'Resolución de fotos: 20 MP (5472 × 3648)'
                    ],
                    'Video' => [
                        '5.4K: 5472 × 3078 24/25/30 fps',
                        '4K UHD: 3840 × 2160 hasta 60 fps',
                        '2.7K: 2688 × 1512 hasta 60 fps',
                        'FHD (1080p): hasta 120 fps',
                        'Bitrate máximo: 150 Mbps',
                        'Formatos: MP4/MOV (H.264/H.265)'
                    ],
                    'Batería' => [
                        'Capacidad: 3500 mAh / 40.42 Wh',
                        'Tiempo máximo de vuelo: 31 minutos'
                    ]
                ]
            ],
            [
                'name' => 'DJI Mavic 3',
                'category' => 'Fotogrametría Aérea',
                'image' => 'https://x02.me/i/27ZS2C.webp',
                'specs' => [
                    'Especificaciones técnicas' => [
                        'Dimensiones plegado: 221 × 96.3 × 90.3 mm',
                        'Dimensiones desplegado: 347.5 × 283 × 107.7 mm',
                        'Peso al despegue: 895 g'
                    ],
                    'Batería' => [
                        'Capacidad: 5000 mAh / 77 Wh',
                        'Peso batería: 335.5 g'
                    ],
                    'Distancia de transmisión' => [
                        'FCC: hasta 15 km',
                        'CE: hasta 8 km'
                    ],
                    'Cámara principal' => [
                        'Sensor: 20 MP 4/3″ CMOS',
                        'Lente: FOV 84° / equivalente 24 mm',
                        'Apertura: f/2.8',
                        'Velocidad de obturación: 8 – 1/8000 s',
                        'Resolución máxima de foto: 20 MP',
                        'Formatos: JPEG / RAW'
                    ],
                    'Video' => [
                        '5.1K: hasta 30 fps',
                        '4K DCI y UHD: hasta 60 fps',
                        '1080p (FHD): hasta 120 fps',
                        'Formatos: MP4/MOV (H.264/H.265)',
                        'Máximo bitrate: hasta ~200 Mbps'
                    ],
                    'Rendimiento de vuelo' => [
                        'Tiempo máximo de vuelo: 46 minutos (ideal)',
                        'Modo Normal: 15 m/s',
                        'Modo Sport: 21 m/s'
                    ],
                    'Sensores y navegación' => [
                        'GNSS: GPS + BeiDou + Galileo',
                        'Sensores de visión frontal y descendente para posicionamiento'
                    ]
                ]
            ]
        ];

        return view('servicios.equipos', compact('products'));
    }
}
