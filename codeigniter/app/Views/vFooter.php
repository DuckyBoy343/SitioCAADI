<footer class="text-center">
    <div class="container pt-1">
        <a href="#" data-toggle="tooltip" title="4731552041" onclick="myFunction()">Contacto</a>
        Correo: <a href="mailto:cuentavavi@gmail.com">cuentavavi@gmail.com</a><br>
        Instituto Tecnológico Superior de Guanajuato
        <br>
        <script>
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
            });

            function myFunction() {
                alert("Esta es la informacion de contacto telefónico");
            }
        </script>
        <sections class="mb-1">
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" 
            href="https://github.com/DuckyBoy343/SitioCAADI" 
            role="button" data-mdb-ripple-color="dark"><i class="bi bi-github"></i></a>
            </section>
    </div>
    <br>
    <div class="container">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Disclaimer</button>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Disclaimer</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            CAADI no da ninguna garantía de que la Página Web funcione sin problemas ni interrupciones.
                            La Información puede ser total o parcialmente incompleta y/o errónea y/o anticuada.
                            La Página Web y, en su caso, también los boletines, pueden contener enlaces o referencias
                            a páginas web de terceros. CAADI no asume ninguna responsabilidad por el uso o el contenido
                            de páginas de Internet externas no gestionadas por CAADI a las que usted sea remitido o que
                            remitan a la Página Web. Los enlaces a otras páginas web solamente se facilitan a los usuarios
                            de esta Página Web para su comodidad. El establecimiento de una conexión con estas páginas web
                            se realiza por cuenta y riesgo del usuario.

                            Nuestras directrices relativas al uso de cookies y protección de datos no serán aplicables a los
                            datos de carácter personal que se recopilan y se procesan en o a través de estas páginas web externas.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>