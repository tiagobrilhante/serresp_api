<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('eventos')->insert([
                [
                    'id' => 1,
                    'dia' => 12,
                    'mes' => 11,
                    'ano' => 2022,
                    'nome' => 'Retirada de lixo da Ponta Negra',
                    'imagem' => 'eventos/2022/pontanegralixo.png',
                    'legenda' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tempus consectetur ipsum, in volutpat sapien tempus nec. Donec vel elit id purus laoreet convallis ut at nisi. Nullam volutpat tortor eget lorem varius, sit amet tristique arcu ultrices. Maecenas at felis id odio rhoncus aliquam. Fusce sodales placerat eros, non aliquet sapien ornare aliquet. Pellentesque tempus est ut ex commodo, non convallis lacus sagittis. Donec ac felis non ipsum porta mattis. Etiam porta commodo congue. Donec et bibendum ante. Morbi hendrerit consectetur placerat. Praesent quis magna rutrum, accumsan nisi tempor, vestibulum tortor. Quisque non turpis sed ipsum iaculis condimentum ac ut tellus. Praesent sit amet semper magna. In et interdum est.',
                    'saibamais'=> 'Informação de Saiba mais genérica 1',
                    'destaque' => true,
                    'ordem_exibicao' => 1,
                    'tipo_evento_id' => 1


                ],

                [
                    'id' => 2,
                    'dia' => 21,
                    'mes' => 10,
                    'ano' => 2020,
                    'nome' => 'Doação de alimentos para a comunidade',
                    'imagem' => 'eventos/2020/doacaoindigena.png',
                    'legenda' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum nulla mi, lobortis nec ipsum pharetra, tempor varius odio. Nunc semper efficitur lorem sit amet rutrum. Quisque mattis mauris felis, a viverra nibh interdum in. Donec dolor felis, porttitor quis metus nec, pellentesque condimentum lectus. Donec porta nibh lacus, vestibulum condimentum purus mattis non. Suspendisse consequat metus sed tortor placerat feugiat. Pellentesque ac purus magna.',
                    'saibamais'=> 'Informação de Saiba mais genérica 2',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 2
                ],

                [
                    'id' => 3,
                    'dia' => 5,
                    'mes' => 1,
                    'ano' => 2023,
                    'nome' => 'Camapanha para recolher roupas',
                    'imagem' => 'eventos/2023/doacaoroupas.png',
                    'legenda' => 'Integer et metus eget elit feugiat egestas. Nullam mattis, arcu at tristique egestas, sem augue mattis arcu, sed pellentesque lorem sapien in mi. In hac habitasse platea dictumst. Donec convallis leo felis, et tincidunt mauris tempor a. Etiam est arcu, commodo sed ante sed, rutrum ornare sem. Aenean sapien nibh, interdum eu eros non, pharetra sodales nibh. Nunc augue quam, dapibus ac lobortis at, ultrices eget lacus. Aliquam eleifend, purus in rhoncus hendrerit, nibh massa aliquet eros, at fringilla metus elit sit amet neque.',
                    'saibamais'=> 'Informação de Saiba mais genérica 3',
                    'destaque' => true,
                    'ordem_exibicao' => 2,
                    'tipo_evento_id' => 3
                ],

                [
                    'id' => 4,
                    'dia' => 2,
                    'mes' => 7,
                    'ano' => 2023,
                    'nome' => 'Pintura de escolas',
                    'imagem' => 'eventos/2023/pinturaescola.png',
                    'legenda' => 'Nulla ultrices accumsan porta. Nullam finibus pharetra enim, id fringilla nulla commodo lacinia. Nam diam erat, lobortis id enim in, euismod ultricies enim. Curabitur vitae justo in massa molestie varius. Maecenas at auctor eros. Sed at finibus turpis, id euismod turpis. Aliquam ut metus sem. Etiam eu cursus urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras vitae vestibulum ligula, at rutrum justo. Sed dapibus eros sit amet justo molestie, sit amet tempor mauris tempus. Cras sollicitudin felis et commodo vehicula.',
                    'saibamais'=> 'Informação de Saiba mais genérica 4',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 2
                ],

                [
                    'id' => 5,
                    'dia' => 12,
                    'mes' => 8,
                    'ano' => 2023,
                    'nome' => 'Desenvolvimento de atividades comunitárias',
                    'imagem' => 'eventos/2023/ativcomunitaria.png',
                    'legenda' => 'Cras porta leo sit amet mauris faucibus tempor. Ut fringilla placerat quam. Aenean dui nunc, rhoncus id fringilla in, pellentesque in diam. Nullam scelerisque neque id nisl fermentum bibendum id non nisi. Integer commodo ante eget metus sodales vestibulum. Maecenas sed purus lobortis, aliquet tellus mattis, pretium tellus. Nulla eget nisi et nisl imperdiet consectetur. Maecenas felis lectus, malesuada quis purus sed, pellentesque accumsan ligula. Suspendisse egestas augue sit amet orci faucibus venenatis. Sed eleifend aliquet nibh id imperdiet. Etiam aliquet quam lacinia sodales sollicitudin. Vivamus rutrum, nisl ut bibendum bibendum, augue leo auctor justo, ac interdum ex ipsum pretium metus.',
                    'saibamais'=> 'Informação de Saiba mais genérica 5',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 1
                ],

                [
                    'id' => 6,
                    'dia' => 22,
                    'mes' => 10,
                    'ano' => 2023,
                    'nome' => 'Apresentação de palestras',
                    'imagem' => 'eventos/2023/apresentapalestra.png',
                    'legenda' => 'Vivamus egestas rutrum sem, sed porta urna tincidunt eget. Integer in nisl leo. In convallis gravida leo vel convallis. Curabitur hendrerit iaculis arcu ornare dictum. Donec a sodales orci. Suspendisse pulvinar eros pretium ex pharetra, in feugiat ante eleifend. Nulla quis risus at lacus tincidunt hendrerit at at erat. Phasellus iaculis ornare lacinia. Fusce auctor lorem dolor, ut ornare dolor consectetur quis. Aenean eleifend ut metus non sagittis. Sed fermentum facilisis ligula a tempus. Aenean risus nisi, convallis eget nulla sit amet, efficitur congue eros. Quisque commodo, urna id rutrum mollis, felis eros faucibus nibh, non porta orci massa vitae felis.',
                    'saibamais'=> 'Informação de Saiba mais genérica 6',
                    'destaque' => true,
                    'ordem_exibicao' => 3,
                    'tipo_evento_id' => 1
                ],

                [
                    'id' => 7,
                    'dia' => 25,
                    'mes' => 10,
                    'ano' => 2019,
                    'nome' => 'Palestra sobre o lixo',
                    'imagem' => 'eventos/2019/palestralixo.png',
                    'legenda' => 'Vivamus egestas rutrum sem, sed porta urna tincidunt eget. Integer in nisl leo. In convallis gravida leo vel convallis. Curabitur hendrerit iaculis arcu ornare dictum. Donec a sodales orci. Suspendisse pulvinar eros pretium ex pharetra, in feugiat ante eleifend. Nulla quis risus at lacus tincidunt hendrerit at at erat. Phasellus iaculis ornare lacinia. Fusce auctor lorem dolor, ut ornare dolor consectetur quis. Aenean eleifend ut metus non sagittis. Sed fermentum facilisis ligula a tempus. Aenean risus nisi, convallis eget nulla sit amet, efficitur congue eros. Quisque commodo, urna id rutrum mollis, felis eros faucibus nibh, non porta orci massa vitae felis.',
                    'saibamais' => 'Informação de Saiba mais genérica 7',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 2
                ],
                [
                    'id' => 8,
                    'dia' => 15,
                    'mes' => 11,
                    'ano' => 2019,
                    'nome' => 'Workshop de Desenvolvimento Web',
                    'imagem' => 'eventos/2019/workshopweb.png',
                    'legenda' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non semper nisl, vitae euismod libero.',
                    'saibamais' => 'Informação de Saiba mais genérica 8',
                    'destaque' => true,
                    'ordem_exibicao' => 4,
                    'tipo_evento_id' => 1
                ],
                [
                    'id' => 9,
                    'dia' => 5,
                    'mes' => 2,
                    'ano' => 2020,
                    'nome' => 'Seminário de Ciências',
                    'imagem' => 'eventos/2020/seminariociencias.png',
                    'legenda' => 'Pellentesque tincidunt, libero ut vestibulum fringilla, turpis augue accumsan nisi, vitae laoreet purus tortor a odio.',
                    'saibamais' => 'Informação de Saiba mais genérica 9',
                    'destaque' => true,
                    'ordem_exibicao' => 5,
                    'tipo_evento_id' => 3
                ],
                [
                    'id' => 10,
                    'dia' => 20,
                    'mes' => 4,
                    'ano' => 2020,
                    'nome' => 'Encontro de Empreendedores',
                    'imagem' => 'eventos/2020/encontroepreend.png',
                    'legenda' => 'Maecenas sit amet risus ut orci commodo volutpat. Aenean vitae felis vel mauris ultricies lacinia non vel massa.',
                    'saibamais' => 'Informação de Saiba mais genérica 10',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 1
                ],
                [
                    'id' => 11,
                    'dia' => 10,
                    'mes' => 8,
                    'ano' => 2020,
                    'nome' => 'Oficina de Fotografia',
                    'imagem' => 'eventos/2020/oficinafotografia',
                    'legenda' => 'Sed aliquet tristique est, ut tincidunt mi fermentum ac. Curabitur varius sem non risus varius euismod.',
                    'saibamais' => 'Informação de Saiba mais genérica 11',
                    'destaque' => true,
                    'ordem_exibicao' => 6,
                    'tipo_evento_id' => 2
                ],
                [
                    'id' => 12,
                    'dia' => 3,
                    'mes' => 12,
                    'ano' => 2020,
                    'nome' => 'Conferência de Tecnologia',
                    'imagem' => 'eventos/2020/conferenciatecnologia.png',
                    'legenda' => 'Nam gravida, quam eu fringilla vestibulum, metus felis feugiat ligula, ut accumsan elit justo a est.',
                    'saibamais' => 'Informação de Saiba mais genérica 12',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 3
                ],
                [
                    'id' => 13,
                    'dia' => 18,
                    'mes' => 6,
                    'ano' => 2021,
                    'nome' => 'Curso de Marketing Digital',
                    'imagem' => 'eventos/2021/cursomarketingdigi.png',
                    'legenda' => 'Vestibulum scelerisque justo eu sem blandit, vel interdum velit tincidunt. Praesent euismod enim id justo tempus, vel tristique dolor facilisis.',
                    'saibamais' => 'Informação de Saiba mais genérica 13',
                    'destaque' => true,
                    'ordem_exibicao' => 7,
                    'tipo_evento_id' => 1
                ],
                [
                    'id' => 14,
                    'dia' => 9,
                    'mes' => 9,
                    'ano' => 2021,
                    'nome' => 'Simpósio de Ciência e Tecnologia',
                    'imagem' => 'eventos/2021/simposiocienctec.png',
                    'legenda' => 'Fusce vitae neque eget lacus vehicula rhoncus. Sed auctor consectetur nunc, nec accumsan turpis vulputate a.',
                    'saibamais' => 'Informação de Saiba mais genérica 14',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 2
                ],
                [
                    'id' => 15,
                    'dia' => 12,
                    'mes' => 1,
                    'ano' => 2022,
                    'nome' => 'Feira de Inovação',
                    'imagem' => 'eventos/2022/feirainovacao.png',
                    'legenda' => 'Phasellus ut purus in dui tincidunt fringilla ac vel quam. Nullam et tellus euismod, efficitur velit vel, fermentum metus.',
                    'saibamais' => 'Informação de Saiba mais genérica 15',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 3
                ],
                [
                    'id' => 16,
                    'dia' => 28,
                    'mes' => 4,
                    'ano' => 2022,
                    'nome' => 'Aula Aberta de Ciências',
                    'imagem' => 'eventos/2022/aulaabertaciencias.png',
                    'legenda' => 'Quisque luctus felis ut risus volutpat, eget luctus purus tristique. Sed quis sapien vitae ligula dictum bibendum.',
                    'saibamais' => 'Informação de Saiba mais genérica 16',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 1
                ],
                [
                    'id' => 17,
                    'dia' => 15,
                    'mes' => 9,
                    'ano' => 2022,
                    'nome' => 'Workshop de Inteligência Artificial',
                    'imagem' => 'eventos/2022/workshopia.png',
                    'legenda' => 'Aenean varius libero vitae urna blandit, vitae efficitur elit fermentum. Sed feugiat, leo sit amet fringilla consectetur, orci mi convallis lacus.',
                    'saibamais' => 'Informação de Saiba mais genérica 17',
                    'destaque' => true,
                    'ordem_exibicao' => 8,
                    'tipo_evento_id' => 2
                ],
                [
                    'id' => 18,
                    'dia' => 7,
                    'mes' => 2,
                    'ano' => 2023,
                    'nome' => 'Encontro de Startups',
                    'imagem' => 'eventos/2023/encontrostartups.png',
                    'legenda' => 'Duis vel felis eu turpis aliquam viverra vel id turpis. Vivamus sit amet urna ut orci consequat vulputate.',
                    'saibamais' => 'Informação de Saiba mais genérica 18',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 3
                ],
                [
                    'id' => 19,
                    'dia' => 20,
                    'mes' => 6,
                    'ano' => 2023,
                    'nome' => 'Curso de Design Gráfico',
                    'imagem' => 'eventos/2023/cursodesigngraf.png',
                    'legenda' => 'Suspendisse potenti. Integer varius mi eu felis aliquet bibendum. Morbi eget ex sit amet libero vulputate viverra.',
                    'saibamais' => 'Informação de Saiba mais genérica 19',
                    'destaque' => true,
                    'ordem_exibicao' => 9,
                    'tipo_evento_id' => 1
                ],
                [
                    'id' => 20,
                    'dia' => 12,
                    'mes' => 12,
                    'ano' => 2023,
                    'nome' => 'Conferência de Sustentabilidade',
                    'imagem' => 'eventos/2023/confsiustentabilidade.png',
                    'legenda' => 'Cras luctus dolor nec libero varius, vitae rhoncus nisl vehicula. Integer facilisis metus non magna sollicitudin, vitae eleifend lacus tristique.',
                    'saibamais' => 'Informação de Saiba mais genérica 20',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 2
                ],
                [
                    'id' => 21,
                    'dia' => 5,
                    'mes' => 3,
                    'ano' => 2024,
                    'nome' => 'Fórum de Inovação Empresarial',
                    'imagem' => 'eventos/2024/foruminovaempresa.png',
                    'legenda' => 'Pellentesque eget orci sit amet nisi fermentum tempus vel a orci. In hac habitasse platea dictumst.',
                    'saibamais' => 'Informação de Saiba mais genérica 21',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 3
                ],
                [
                    'id' => 22,
                    'dia' => 18,
                    'mes' => 8,
                    'ano' => 2024,
                    'nome' => 'Simpósio de Tecnologia da Informação',
                    'imagem' => 'eventos/2024/simposioti.png',
                    'legenda' => 'Vivamus interdum ante vel massa iaculis, id aliquet odio tincidunt. Sed vel tortor eu elit volutpat commodo.',
                    'saibamais' => 'Informação de Saiba mais genérica 22',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 1
                ],
                [
                    'id' => 23,
                    'dia' => 8,
                    'mes' => 4,
                    'ano' => 2020,
                    'nome' => 'Conferência de Inovação Tecnológica',
                    'imagem' => 'eventos/2020/confinovaetec.png',
                    'legenda' => 'Ut condimentum eros a felis dignissim, a gravida purus bibendum. Sed luctus lacus a velit dictum, id rhoncus orci posuere.',
                    'saibamais' => 'Informação de Saiba mais genérica 23',
                    'destaque' => false,
                    'ordem_exibicao' => null,
                    'tipo_evento_id' => 3
                ],

            ]
        );
    }
}
