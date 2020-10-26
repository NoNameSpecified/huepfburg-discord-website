

<!-- INFO : Complete source code stored at https://github.com/NoNameSpecified/hburg_exercise -->

<!-- 
    ### START OF HEADER.PHP
-->

<?php require 'includes/header.php';?>

<!-- 
    ### END OF HEADER.PHP 
-->

<body>

    <!-- Showcase, landing view -->
    <div id="showcase">
        <div id="showcase_title">
            <h1 id="showcase_h1">Der Hüpfburg Server<br>auf Discord!</h1>
            <img src="img/showcase/stitch_stars_emoji.png" alt="EMOJI" id="stitch_stars_emoji">
        </div>
    </div>
    
    <div id="aufbau">
        <div id="struktur_link" style="position: absolute; top: -10.3vh;"></div>
        <!--
            Was in den Aufbau gehört :
                - Channels, Rollen (schalten auch Channels frei), Ränge, 
                Es gibt einen Titel/kurze Beschreibung, und dann ein Plussymbol, worauf man klicken kann um den "content" div zu entfalten
        -->

        <h3 id="aufbau_title">Die Struktur des Servers</h3>

        <div class="collapse_div" id="rollen">
            <div class="top_span" id="top_span_rollen">
                <h3>>> Die Rollen</h3>
                <img src="img/section_aufbau/expand_button.png" alt="expand" class="expand_button" id="expand_button_rollen">
            </div>
            <div class="content collapsed" id="content_collapsed_rollen">
            <div>
                <img src="img/section_aufbau/rollen_beispiel.png" alt="rollen_beispiel">
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto nisi accusantium repellendus! 
                Magnam amet quia expedita aperiam ipsa, sed, ratione fugiat vel saepe autem magni praesentium sunt ex culpa, 
                temporibus eveniet id quis ad modi velit? Modi molestiae dignissimos fuga repellendus facere ratione vitae reiciendis
                sint ad vero aut, ex ipsam a doloremque officia voluptate odit tempora consequatur enim nobis sit iusto? Molestias vel,
                qui eius excepturi odio minus nemo vero libero tempora deleniti pariatur non ea quod repellendus, maxime cum, dignissimo
                s omnis quae numquam iste eveniet repudiandae neque? Voluptas eligendi dolor earum doloribus odit alias, officiis similique
                necessitatibus obcaecati maxime dolore adipisci fuga non placeat ad expedita ducimus eos ab sapiente. Provident eos debitis
                voluptatem voluptate, deserunt iure temporibus in asperiores nam nostrum possimus dicta, tempora officia laborum ut sed,
                maiores eius. Vel laborum impedit sed praesentium aperiam quam adipisci iure exercitationem at vero quibusdam nesciunt
                cumque earum assumenda minima unde aspernatur, obcaecati ad? Ducimus, quod possimus cum animi sunt perferendis quas ullam,
                ea, in sed nemo explicabo qui.</p>
                
            </div>
        </div>

        <div class="collapse_div" id="channels">
            <div class="top_span" id="top_span_channels">
                <h3>>> Die Channels</h3>
                <img src="img/section_aufbau/expand_button.png" alt="expand" class="expand_button" id="expand_button_channels">
            </div>
            <div class="content collapsed" id="content_collapsed_channels">
                <ul>
                    <li>
                        <h3>Die »Server stats«</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, quisquam?</p>
                        <br>
                    </li>
                    <img src="img/section_aufbau/channel_kategorien.png" alt="channel_kategorien">
                    <li>
                        <h3>Die »Talk« Channels</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem magnam consectetur voluptatem perferendis vel quaerat ut eos! Similique, natus consequuntur.</p>
                        <br>
                    </li>
                    <li>
                        <h3>Die Themen-Channels</h3>
                        <p>blabla werden durch Rollen freigeschaltet, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, saepe?</p>
                        <br>
                    </li>

                    <li>
                        <h3>Für die Bots:</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, saepe?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eius?</p>
                        <br>
                    </li>
                    <li>
                        <h3>Minispiele !</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, saepe?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, eius?</p>
                        <br>
                    </li>
                </ul>

                
            </div>
        </div>

        <div class="collapse_div" id="rang">
            <div class="top_span" id="top_span_rang">
                <h3>>> Das Rang-System</h3>
                <img src="img/section_aufbau/expand_button.png" alt="expand" class="expand_button" id="expand_button_rang">
            </div>
            <div class="content collapsed" id="content_collapsed_rang">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto nisi accusantium repellendus! 
                Magnam amet quia expedita aperiam ipsa, sed, ratione fugiat vel saepe autem magni praesentium sunt ex culpa, 
                temporibus eveniet id quis ad modi velit? Modi molestiae dignissimos fuga repellendus facere ratione vitae reiciendis
                sint ad vero aut, ex ipsam a doloremque officia voluptate odit tempora consequatur enim nobis sit iusto? Molestias vel,
                qui eius excepturi odio minus nemo vero libero tempora deleniti pariatur non ea quod repellendus, maxime cum, dignissimo
                s omnis quae numquam iste eveniet repudiandae neque? <br> Voluptas eligendi dolor earum doloribus odit alias, officiis similique
                necessitatibus obcaecati maxime dolore adipisci fuga non placeat ad expedita ducimus eos ab sapiente. Provident eos debitis
                voluptatem voluptate, deserunt iure temporibus in asperiores nam nostrum possimus dicta, tempora officia laborum ut sed,
                maiores eius. Vel laborum impedit sed praesentium aperiam quam adipisci iure exercitationem at vero quibusdam nesciunt
                cumque earum assumenda minima unde aspernatur, obcaecati ad? Ducimus, quod possimus cum animi sunt perferendis quas ullam,
                ea, in sed nemo explicabo qui.</p>
                <img src="img/section_aufbau/raenge.png" alt="ränge">
            </div>
        </div>

    </div>

    <!--
        Rest of the Code in the footer.php
    -->

    <div class="coming_soon"></div>

</body>