@extends('layouts.app')

    
@section('conteudo')
    <div class="info">
        <div class="info-texto">
            <div class="texto">
                <h1>O que é o <strong> escolar.io? </strong></h1>
                <p>
                    É uma ferramenta voltada para o atendimento das demandas<br>
                    de requisições de documentos no departamento de escolaridade<br>
                    da Universidade Federal Rural de Pernambuco - UAG.
                </p>
                <h1>Benefícios de utilizar o <strong> escolar.io? </strong></h1>
                <ul>
                    <li>Solicite seus documentos online;</li>
                    <li>Acompanhe o status do seu requerimento;</li>
                    <li>Retire os documentos apresentando o número de protocolo.</li>
                </ul>

                <h1>Quais documentos eu posso solicitar?</h1>
                <ul>
                    <li>Declaração de vínculo;</li>
                    <li>Comprovante de matrícula;</li>
                    <li>Histórico Escolar;</li>
                    <li>Programa de Disciplinas e</li>
                    <li>Outros.</li>
                </ul>
            </div>
            
                
        </div>
        <div class="info-login">

                <h1 class="text-center">Entrar</h1>
                <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">E-mail</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                          <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Senha</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Lembre-se de mim</label>
                        </div>

                        <div class="botoes">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        
                      </form>
        </div>
    </div>
@endsection