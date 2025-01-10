<?php

namespace Database\Seeders;

use App\Models\home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        home::firstOrCreate(
            ['id' => 1],
            [
                'title' => 'Bem-vindo ao Química Fácil!',
                'subtitle' => '"Desvendando os segredos dos elementos e das reações de forma simples, divertida e acessível! Aqui, a ciência ganha vida e torna-se parte do seu dia a dia."',
                
                'text_btn' => 'Explore os conteúdos',
                'link_btn' => '#',

                'title_topics' => 'Qumica', 
                'description_topics' => 'quimica',

                'title_topic_one' => 'Descubra a Magia da Química',
                'description_topic_one' => 'Entenda como a química está presente em nosso dia a dia de maneiras surpreendentes! Explore curiosidades sobre os elementos químicos, reações inusitadas e descobertas fascinantes que mudaram o mundo.',

                'title_topic_two' => 'Química e Tecnologia',
                'description_topic_two' => 'Entenda como a química está por trás das tecnologias que usamos todos os dias. Conheça os materiais inovadores, como baterias recarregáveis e telas sensíveis ao toque, que transformam nosso mundo.',

                'title_topic_three' => 'Curiosidades Históricas da Química',
                'description_topic_three' => 'Viaje no tempo e conheça os momentos mais marcantes da história da química. Das primeiras tentativas de alquimia até a criação da tabela periódica, veja como a ciência evoluiu.',

                'title_topic_four' => 'Experimentando com a Química',
                'description_topic_four' => 'Experimentos fáceis e seguros que você pode fazer em casa ou na escola. Aprenda como fazer um vulcão de bicarbonato, tinta invisível e outros projetos divertidos que despertam a curiosidade científica.',

                'title_topic_five' => 'Química e Sustentabilidade',
                'description_topic_five' => 'Saiba como a química está ajudando a salvar o planeta. Desde a criação de plásticos biodegradáveis até a purificação da água, veja como a ciência está moldando um futuro mais sustentável.',

                'title_topic_six' => 'A Química dos Mistérios do Universo',
                'description_topic_six' => 'Descubra como a química explica a composição dos gases no Sol e em outras estrelas. Explore os elementos que alimentam reações nucleares, mantêm as estrelas brilhando e ajudam a compreender a dinâmica do universo.',

                'title_topic_seven' => 'Elementos que Contam Histórias',
                'description_topic_seven' => 'Conheça os elementos químicos e suas curiosidades. Saiba como o ouro moldou economias, como o mercúrio intrigou cientistas, e como elementos raros são essenciais para a tecnologia moderna.',

                'title_topic_eight' => 'Química na Cozinha',
                'description_topic_eight' => 'Descubra como a ciência transforma ingredientes simples em pratos deliciosos. Entenda as reações químicas por trás do pão que cresce, do caramelo dourado e do espumante borbulhante.',


            ],
        );
    }
}
