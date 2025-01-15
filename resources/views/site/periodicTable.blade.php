@extends('layouts.site')
@section('content')
    <img src="/img/periodicTable/Periodic_table.png" alt="tabela periodica">

    <p class="pdf text-center">Clique aqui para obter o arquivo em PDF <a href="/img/periodicTable/Periodic_table.pdf"
            target="_blank" rel="external">Tabela</a></p>

    </head>

    <body>
        <header>
            <h4 class="mb-3 text-center">Classes de Elementos Químicos</h4>
        </header>
        <main>
            <section>
                <h2>Metais Alcalinos (Grupo 1)</h2>
                <ul>
                    <li><strong>Elementos:</strong> Lítio (Li), Sódio (Na), Potássio (K), Rubídio (Rb), Césio (Cs), Frâncio
                        (Fr).</li>
                    <li><strong>Onde encontrados:</strong> Minerais como espodumênio e salmouras naturais.</li>
                    <li><strong>Propriedades químicas:</strong> Altamente reativos, especialmente com água. Formam
                        hidróxidos fortes.</li>
                </ul>
            </section>
            <section>
                <h2>Metais Alcalino-Terrosos (Grupo 2)</h2>
                <ul>
                    <li><strong>Elementos:</strong> Berílio (Be), Magnésio (Mg), Cálcio (Ca), Estrôncio (Sr), Bário (Ba),
                        Rádio (Ra).</li>
                    <li><strong>Onde encontrados:</strong> Calcário, dolomita, minerais como barita.</li>
                    <li><strong>Propriedades químicas:</strong> Menos reativos que os alcalinos, mas formam óxidos e
                        hidróxidos básicos.</li>
                </ul>
            </section>
            <section>
                <h2>Outros Metais (Pós-Transição)</h2>
                <ul>
                    <li><strong>Elementos:</strong> Alumínio (Al), Gálio (Ga), Índio (In), Tálio (Tl), Estanho (Sn), Chumbo
                        (Pb), Bismuto (Bi), Polônio (Po), Flermônio (Fl).</li>
                    <li><strong>Onde encontrados:</strong> Bauxita, cassiterita, galena, entre outros.</li>
                    <li><strong>Propriedades químicas:</strong> São mais moles e têm menores pontos de fusão que os metais
                        de transição.</li>
                </ul>
            </section>
            <section>
                <h2>Metais de Transição (Grupos 3 a 12)</h2>
                <ul>
                    <li><strong>Elementos:</strong> Ferro (Fe), Cobre (Cu), Ouro (Au), Níquel (Ni), Prata (Ag), Platina
                        (Pt), entre outros.</li>
                    <li><strong>Onde encontrados:</strong> Hematita, calcopirita, depósitos aluviais, lateritas, entre
                        outros.</li>
                    <li><strong>Propriedades químicas:</strong> Alta condutividade elétrica e térmica, formam compostos
                        coloridos, bons catalisadores.</li>
                </ul>
            </section>
            <section>
                <h2>Lantanídeos (Terras Raras)</h2>
                <ul>
                    <li><strong>Elementos:</strong> Lantânio (La) a Lutécio (Lu).</li>
                    <li><strong>Onde encontrados:</strong> Bastnasita, monazita.</li>
                    <li><strong>Propriedades químicas:</strong> Formam óxidos e compostos paramagnéticos.</li>
                </ul>
            </section>
            <section>
                <h2>Actinídeos</h2>
                <ul>
                    <li><strong>Elementos:</strong> Actínio (Ac) a Laurêncio (Lr).</li>
                    <li><strong>Onde encontrados:</strong> Minerais de urânio e tório.</li>
                    <li><strong>Propriedades químicas:</strong> Radioativos, com aplicações em energia nuclear.</li>
                </ul>
            </section>
            <section>
                <h2>Semimetais (Metaloides)</h2>
                <ul>
                    <li><strong>Elementos:</strong> Boro (B), Silício (Si), Germânio (Ge), Arsênio (As), Antimônio (Sb),
                        Telúrio (Te), Astato (At).</li>
                    <li><strong>Onde encontrados:</strong> Boratos, quartzo, minérios associados ao zinco, entre outros.
                    </li>
                    <li><strong>Propriedades químicas:</strong> Propriedades intermediárias entre metais e não metais.</li>
                </ul>
            </section>
            <section>
                <h2>Não Metais</h2>
                <ul>
                    <li><strong>Elementos:</strong> Carbono (C), Nitrogênio (N), Oxigênio (O), Fósforo (P), Enxofre (S),
                        Selênio (Se).</li>
                    <li><strong>Onde encontrados:</strong> Minerais como carvão e diamante, ar atmosférico, fosfatos, entre
                        outros.</li>
                    <li><strong>Propriedades químicas:</strong> Formam compostos moleculares e são essenciais para a vida.
                    </li>
                </ul>
            </section>
            <section>
                <h2>Halogênios (Grupo 17)</h2>
                <ul>
                    <li><strong>Elementos:</strong> Flúor (F), Cloro (Cl), Bromo (Br), Iodo (I), Astato (At), Tenessino
                        (Ts).</li>
                    <li><strong>Onde encontrados:</strong> Fluorita, sal-gema, salmouras, algas marinhas.</li>
                    <li><strong>Propriedades químicas:</strong> Altamente reativos, formam sais com metais.</li>
                </ul>
            </section>
            <section>
                <h2>Gases Nobres (Grupo 18)</h2>
                <ul>
                    <li><strong>Elementos:</strong> Hélio (He), Neônio (Ne), Argônio (Ar), Criptônio (Kr), Xenônio (Xe),
                        Radônio (Rn).</li>
                    <li><strong>Onde encontrados:</strong> Ar atmosférico, depósitos de gás natural.</li>
                    <li><strong>Propriedades químicas:</strong> Inertes devido à camada de valência completa.</li>
                </ul>
            </section>
            <section>
                <h2>Elementos Desconhecidos</h2>
                <ul>
                    <li><strong>Elementos:</strong> Moscóvio (Mc), Livermório (Lv), Tenessino (Ts), Oganessônio (Og).</li>
                    <li><strong>Onde encontrados:</strong> Produzidos artificialmente em laboratórios.</li>
                    <li><strong>Propriedades químicas:</strong> Extremamente instáveis e pouco conhecidos.</li>
                </ul>
            </section>
        </main>
    </body>

    </html>
@endsection
