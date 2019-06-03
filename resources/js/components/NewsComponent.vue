<template>
    <div class="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Notícias</h1>
                </div>
                <div class="col-12 col-md-6 col-lg-4 notice" v-for="notice in news" v-bind:key="notice.id">
                    <div class="img">
                        <img v-bind:src="notice.image"  v-bind:alt="notice.title">
                    </div>
                    <h5>{{ notice.title }}</h5>
                    <span>{{ notice.data }}</span>
                    <p>{{ notice.description }}</p>
                    <a href="" v-bind:title="notice.title" class="read-more">Leia mais</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            test: '',
            news: [
                {
                    id: 1,
                    title: "Professor conquista certificação de segurança cibernética com relevância mundial",
                    image: "/images/news-1.jpg",
                    data: "13 de julho de 2018",
                    description: "O professor de MBA da FIAP, Ricardo Giorgi, conquistou mais um certificado: o SANS – GIAC Certification – uma das mais relevantes certificações em cibersegurança do mundo. As Certificações GIAC fornecem conhecimento e habilidades atuais de segurança cibernética, que estão disponíveis para clientes industriais, governamentais e militares em todo o…"
                },
                {
                    id: 2,
                    title: "Professor conquista certificação de segurança cibernética com relevância mundial",
                    image: "/images/news-2.jpg",
                    data: "2 de julho de 2018",
                    description:
                    "O professor de MBA da FIAP, Ricardo Giorgi, conquistou mais um certificado: o SANS – GIAC Certification – uma das mais relevantes certificações em cibersegurança do mundo. As Certificações GIAC fornecem conhecimento e habilidades atuais de segurança cibernética, que estão disponíveis para clientes industriais, governamentais e militares em todo o…"
                },
                {
                    id: 3,
                    title: "Professor conquista certificação de segurança cibernética com relevância mundial",
                    image: "/images/news-3.jpg",
                    data: "10 de agosto de 2018",
                    description: "O professor de MBA da FIAP, Ricardo Giorgi, conquistou mais um certificado: o SANS – GIAC Certification – uma das mais relevantes certificações em cibersegurança do mundo. As Certificações GIAC fornecem conhecimento e habilidades atuais de segurança cibernética, que estão disponíveis para clientes industriais, governamentais e militares em todo o…"
                },
                {
                    id: 4,
                    title: "Professor conquista certificação de segurança cibernética com relevância mundial",
                    image: "/images/news-4.jpg",
                    data: "14 de setembro de 2018",
                    description: "O professor de MBA da FIAP, Ricardo Giorgi, conquistou mais um certificado: o SANS – GIAC Certification – uma das mais relevantes certificações em cibersegurança do mundo. As Certificações GIAC fornecem conhecimento e habilidades atuais de segurança cibernética, que estão disponíveis para clientes industriais, governamentais e militares em todo o…"
                },
                {
                    id: 5,
                    title: "Professor conquista certificação de segurança cibernética com relevância mundial",
                    image: "/images/news-5.jpg",
                    data: "24 de outubro de 2018",
                    description: "O professor de MBA da FIAP, Ricardo Giorgi, conquistou mais um certificado: o SANS – GIAC Certification – uma das mais relevantes certificações em cibersegurança do mundo. As Certificações GIAC fornecem conhecimento e habilidades atuais de segurança cibernética, que estão disponíveis para clientes industriais, governamentais e militares em todo o…"
                },
                {
                    id: 6,
                    title: "Professor conquista certificação de segurança cibernética com relevância mundial",
                    image: "/images/news-6.jpg",
                    data:  "31 de julho de 2018",
                    description: "O professor de MBA da FIAP, Ricardo Giorgi, conquistou mais um certificado: o SANS – GIAC Certification – uma das mais relevantes certificações em cibersegurança do mundo. As Certificações GIAC fornecem conhecimento e habilidades atuais de segurança cibernética, que estão disponíveis para clientes industriais, governamentais e militares em todo o…"
                }
            ]
        };
    }
};
</script>
