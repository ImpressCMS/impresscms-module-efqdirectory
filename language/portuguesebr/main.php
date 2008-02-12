<?php
// $Id: main.php,v 0.18 2006/02/28 19:46:00 wtravel
//  ------------------------------------------------------------------------ //
//                				EFQ Directory			                     //
//                       <http://www.efqdirectory.com/>                      //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//	Part of the efqDirectory module provided by: wtravel					 //
// 	e-mail: info@efqdirectory.com											 //
//	Purpose: Create a business directory for xoops.		 	 				 //
//	Based upon the mylinks and the mxDirectory modules						 //
// ------------------------------------------------------------------------- //
//Submit form
define("_MD_SELECT","Escolha sim/n�o"); //GibaPhp
define("_MD_CATEGORIES","Categorias"); //GibaPhp
define("_MD_ERROR_NOT_SAVED","O registro n�o foi salvo. Entre em contato com o administrador do site."); //GibaPhp

define("_MD_THANKSFORINFO","Obrigado pela informa��o. Iremos averiguar o seu pedido em breve."); //GibaPhp
define("_MD_THANKSFORHELP","Obrigado por ajudar a manter a integridade deste direct�rio.");
define("_MD_FORSECURITY","Por motivos de seguran�a seu nome de usu�rio e endere�o de IP ser� tamb�m temporariamente gravado.");

define("_MD_SEARCHFOR","Pesquisar para");
define("_MD_ANY","QUALQUER");
define("_MD_SEARCH","Pesquisar");
define("_MD_NORESULTS","N�o foram encontrados resultados.");

define("_MD_MAIN","Principal");
define("_MD_POPULAR","Popular");
define("_MD_TOPRATED","Melhores");

define("_MD_EDIT","Editar");
define("_MD_UPDATE","Atualizar");
define("_MD_CONTINUE","Continuar");
define("_MD_FINISHED","Finalizado");

define("_MD_CREATED","Criado");

define("_MD_NEWTHISWEEK","Novos esta Semana");
define("_MD_UPTHISWEEK","Atualizados esta Semana");

define("_MD_POPULARITYLTOM","Popularidade (Menos a maioria dos hits)");
define("_MD_POPULARITYMTOL","Popularidade (A maioria dos que menos hits)");
define("_MD_TITLEATOZ","T�tulo (A para Z)");
define("_MD_TITLEZTOA","T�tulo (Z para A)");
define("_MD_DATEOLD","Data (Antigo em primeiro)");
define("_MD_DATENEW","Date (Novos em primeiro)");
define("_MD_RATINGLTOH","Nota (Menos votos em primeiro)");
define("_MD_RATINGHTOL","Nota (Mais votos em primeiro)");

define("_MD_NOSHOTS","Sem Screenshots");
define("_MD_EDITTHISLINK","Editar Este Link");

define("_MD_DESCRIPTIONC","Descri��o: ");
define("_MD_EMAILC","E-mail: ");
define("_MD_CATEGORYC","Categoria: ");
define("_MD_LASTUPDATEC","�ltima Atualiza��o: ");
define("_MD_HITSC","Visitas: ");
define("_MD_RATINGC","Notas: ");
define("_MD_ONEVOTE","1 voto");
define("_MD_NUMVOTES","%s votos");
define("_MD_RATETHISSITE","Avalie esta lista");
define("_MD_MODIFY","Modifica");
define("_MD_REPORTBROKEN","Avisar link quebrado");
define("_MD_TELLAFRIEND","Enviar a uma Amigo");
define("_MD_SPECIALOFFERS_FOR","Ofertas especiais de:");

define("_MD_THEREARE","Existem <b>%s</b> Listagens neste diret�rio");
define("_MD_LATESTLIST","�ltimas Listagens");

define("_MD_REQUESTMOD","Pedido de modifica��o para um link");
define("_MD_LINKID","Link ID: ");
define("_MD_SITETITLE","T�tulo do Site: ");
define("_MD_SITEURL","URL do Site: ");
define("_MD_OPTIONS:","Op��es: ");
define("_MD_OPTIONS","Op��es");
define("_MD_OPTIONS_EXPL","Separe lista de op��es, utilizando o sinal | como separador.");
define("_MD_NOTIFYAPPROVE", "Avise-me quando este link for aprovado");
define("_MD_SHOTIMAGE","Imagem Reduzida: ");
define("_MD_SENDREQUEST","Enviar solicita��o");

define("_MD_VOTEAPPRE","Seu voto � apreciado.");
define("_MD_THANKURATE","Agradecemos o seu tempo para avaliar este site %s.");
define("_MD_VOTEFROMYOU","Votando neste item voc� vai ajudar outros visitantes a escolher qual � o melhor link.");
define("_MD_VOTEONCE","N�o vote no mesmo link mais do que uma vez.");
define("_MD_RATINGSCALE","A escala � 1 - 10, Com 1 sendo reuim e 10 sendo excelente.");
define("_MD_BEOBJECTIVE","Por favor seja objectivo, se todos recebe um 1 ou um 10, as avalia��es n�o s�o muito �teis.");
define("_MD_DONOTVOTE","Voc� n�o pode votar em seus links.");
define("_MD_RATEIT","Votar!");
define("_MD_NORESULTS_PLEASE_CREATE_DIRECTORY","Nenhum diret�rio foi encontrado. Crie um novo diret�rio.");


define("_MD_WHENAPPROVED","Voc� receber� um e-mail quando tiver sido aprovado.");
define("_MD_SUBMITONCE","Envie seu link apenas uma vez.");
define("_MD_ALLPENDING","Todas as informa��es s�o enviadas para uma verifica��o e ficar�o pendentes.");
define("_MD_DONTABUSE","Por motivos de seguran�a seu nome de usu�rio e IP ser�o temporariamente gravados.");
define("_MD_TAKESHOT","Pode demorar v�rios dias para que o site link seja adicionado ao nosso banco de dados.");

define("_MD_RANK","Rank");
define("_MD_CATEGORY","Categoria");
define("_MD_DESCRIPTION","Descri��o");
define("_MD_HITS","Visitas");
define("_MD_RATING","Votos");
define("_MD_VOTE","Voto");
define("_MD_TOP10","%s 10 Melhores"); // %s is a listing category title

define("_MD_SEARCHRESULTS","Procurar resultados para <b>%s</b>:"); // %s is search keywords
define("_MD_SORTBY","Ordenar por:");
define("_MD_TITLE","T�tulo");
define("_MD_DATE","Data");
define("_MD_POPULARITY","Popularidade");
define("_MD_CURSORTEDBY","Sites est�o ordenados por: %s");
define("_MD_PREVIOUS","Anterior");
define("_MD_NEXT","Pr�ximo");
define("_MD_NOMATCH","Nenhum resultado encontrado em sua pesquisa");

define("_MD_SUBMIT","Ok!");
define("_MD_CANCEL","Cancelar");

/* define("_MD_ALREADYREPORTED","You have already submitted a broken report for this resource."); */
define("_MD_MUSTREGFIRST","Desculpe, mas voc� n�o tem a permiss�o para executar esta a��o.<br />Registe-se ou fa�a o seu login primeiro!");
define("_MD_NORATING","Nenhuma classifica�o selecionada.");
define("_MD_CANTVOTEOWN","Voc� n�o pode votar neste diret�rio.<br />Todos os votos s�o registradas e revisados.");
define("_MD_VOTEONCE2","Vote o diret�rio escolhido apenas uma vez.<br />Todos os votos s�o registradas e revisados.");

//%%%%%%	Module Name 'efqdirectory' (Admin)	  %%%%%
define("_MD_MANAGE_SUBSCRIPTION_OFFERS","Gerenciar ofertas subscri��o");
define("_MD_A_MODADMIN_HOME","Administra��o");
define("_MD_A_DIRADMIN","Gerenciar Diret�rios");
define("_MD_A_FTYPESADMIN","Gerenciar tipos de Campos");
define("_MD_A_ATYPESADMIN","Gerenciar tipos de endere�os");
define("_MD_A_ASUBSCRIPTIONSADMIN","Gerenciar Inscri��es");
define("_MD_CURRENT_PIC","Imagem Atual");
define("_MD_SAVED","Registros Salvos");
define("_MD_LISTINGDELETED","Listando os apagados");
define("_MD_LISTINGAPPROVED","Listando os aprovados");
define("_MD_MANAGEDIRECTORIES","Gerenciando os Diret�rios");
define("_MD_MANAGEFIELDTYPES","Gerenciar tipos de campos");
define("_MD_MANAGEADDRESSTYPES","Gerenciar tipo de endere�os");
define("_MD_LISTINGTITLE","Listando t�tulos");
define("_MD_CHECK_DUPLICATE_DATATYPES","Verificar duplicatas nos dados");
define("_MD_DUPLICATE_DATATYPES","Informa��es duplicadas");
define("_MD_MERGE","Merge");

define("_MD_DAYS","Dias");
define("_MD_WEEKS","Semanas");
define("_MD_QUARTERS","Trimestres");
define("_MD_MONTHS","Meses");
define("_MD_YEARS","Anos");

define("_MD_DAY","Dia");
define("_MD_WEEK","Semana");
define("_MD_QUARTER","Trimestre");
define("_MD_MONTH","M�s");
define("_MD_YEAR","Ano");

define("_MD_CURR_USD","USD");
define("_MD_CURR_AUD","AUD");
define("_MD_CURR_EUR","EUR");
define("_MD_CURR_GBP","GPB");
define("_MD_CURR_YEN","YEN");

//Directories management
define("_MD_INVALID_DIR","Diret�rio Inv�lido.");
define("_MD_CREATE_NEWDIR","Criar um novo Diret�rio");
define("_MD_DIRNAME","Nome do Diret�rio");
define("_MD_DIROPENYN","Definir como aberto?");
define("_MD_TOTALCATS","Nr. de categorias");
define("_MD_YESNO"," Marcar com <strong>Sim</strong>, desmarcar <strong>N�o</strong>");
define("_MD_NA","N/A");
define("_MD_ACTION","A��o");
define("_MD_POSTFIX","Usar neste diret�rio Postfix ");
define("_MD_OPENYN","Definir este Diret�rio como aberto?");
define("_MD_DIR_SAVED","Diret�rio gravado corretamente.");
define("_MD_DIR_UPDATED","Diret�rio Atualizado");
define("_MD_MANAGE_CATS","Gerenciar categorias");
define("_MD_MANAGE_CAT","Gerenciar Categoria");
define("_MD_EDITDIR","Editar diret�rio");
define("_MD_EDITDIRFORM","Editar formul�rio do diret�rio");
define("_MD_SELECT_PIC","Escolher uma imagem para o upload");
define("_MD_WITH_SELECTED","Com selecionados");
define("_MD_STATUS","Status");
define("_MD_OPEN","Aberto");
define("_MD_CLOSE","Fechar");
define("_MD_CLOSED","Fechado");
define("_MD_EDIT_BRACKETS"," [ Edita ]");

//Categories management
define("_MD_CREATE_NEWCAT","Criar uma nova Categoria");
define("_MD_EDITCAT","Editar categoria");
define("_MD_NEWCATFORM","Nova categoria no formul�rio");
define("_MD_CATTITLE","T�tulo da Categoria");
define("_MD_CATTEXT_ACTIVE_YN","Mostrar o Texto da Categoria?");
define("_MD_ACTIVEYN","Escolher esta categoria como Ativa?");
define("_MD_ACTIVE","Ativar");
define("_MD_ALLOWLISTYN","Esta categoria poder� ser listada?");
define("_MD_SHOWPOPULARYN","Mostrar as mais populares listagens no inicio desta categoria?");
define("_MD_PARENTCAT","Categoria Parente");
define("_MD_EDITCATFORM","Editar o formul�rio da categoria");
define("_MD_EDITDTYPES","Editar o campo e tipo de dados");
define("_MD_ADDDTYPE","Incluir um tipo de campo de dados");
define("_MD_DTYPE","Tipo de campo de dados");
define("_MD_DTYPE_TITLE","T�tulo do tipo de campo de dados");
define("_MD_DTYPE_NAME","Nome do tipo de campo de dados");
define("_MD_DTYPE_SEQ","Seq��ncia");
define("_MD_DTYPE_SEQ_ABBR","Seq.");
define("_MD_DTYPE_ACTIVEYN","Definir este tipo de campo de dados como ativo?");
define("_MD_SECTION","Setor");
define("_MD_FTYPE_NAME","Tipo de nome do campo");
define("_MD_DEFAULT","Padr�o");
define("_MD_DTYPE_DEFAULTYN","Definir este tipo de campo de dado como padr�o para as categorias dependentes?");
define("_MD_IMPORT_DTYPES_FROM_PARENTCAT","Importar dados do tipo de campo da categoria m�e");
define("_MD_IMPORT_DTYPES_FROM_OTHERCAT","Importar dados de outros tipos de campo da categoria");
define("_MD_IMPORT_DTYPES_YN","Importar Automaticamente o campo padr�o da categoria m�e?");
define("_MD_NORECORDS","Nenhum Registro encontrado");
define("_MD_ADD_DTYPE_FORM","Incluir um tipo de campo no formul�rio");
define("_MD_CAT_SAVED","Categoria salva");
define("_MD_CAT_UPDATED","Categoria atualizada");
define("_MD_DTYPE_ICON","Icon");
define("_MD_DTYPE_CUSTOM","Campo customizado s/n");
define("_MD_SELECT_ICON","Escolher icon");
define("_MD_CURRENT_ICON","�con Atual");
define("_MD_CUSTOM","Campo Customizado");
define("_MD_EDITDTYPE","Editar tipo de dados");
define("_MD_NOIMAGE","Imagem n�o foi escolhida");
define("_MD_EDIT_DTYPE_FORM","Editar o tipo de campo no formul�rio");
define("_MD_DTYPE_UPDATED","Tipo de dados foi atualizado");
define("_MD_EDITCATEGORIES","Editar categorias");
define("_MD_CREATE_NEWSUBCAT","Criar nova sub-categoria");
define("_MD_SUBCATEGORIES","SubCategorias");
define("_MD_NOVALIDDIR","Diret�rio escolhido n�o � v�lido");
define("_MD_NORESULTS_PLEASE_CREATE_CATEGORY","Nenhuma categoria foi encontrada. Crie uma nova categoria.");
define("_MD_NOFIELDTYPE_SELECTED","Nenhum tipo de campo foi selecionado. Selecione um dos tipos de campo antes de enviar o formul�rio.");

//Address types management
define("_MD_ADDRESSTYPE_UPDATED","Tipo de endere�o atualizado");
define("_MD_EDIT_ADDRESSTYPES_TITLE","Editar tipo de endere�o");
define("_MD_MANAGE_ADDRESS_TYPES","Gerenciar tipo de Endere�os");
define("_MD_EDIT_ADDRESSTYPE_FIELDS_FORM","Tipo de Endere�os no formul�rio");
define("_MD_FIELDS","Tipo de Endere�os");
define("_MD_USELOCYN","Use o gerente de localiza��o para atualizar os campos relacionados (como a cidade e o pa�s)?");
define("_MD_ADDRESSTYPE_TITLE","Nome do Tipo");

//Fieldtypes management
define("_MD_FIELDTYPE","Tipo de Campo");
define("_MD_FTYPECONF","Gerenciamento do tipo de campo");
define("_MD_CREATE_NEWFTYPE","Criar um novo tipo de campo");
define("_MD_VIEW_FIELDTYPE","Ver tipo de campo");
define("_MD_TYPE","Tipo");
define("_MD_EXT","Extens�o");
define("_MD_SET_EXT","Gerenciamento de Extens�es");
define("_MD_NEWFTYPEFORM","Novo tipo de campo no formul�rio");
define("_MD_EDITFTYPEFORM","Editar tipo de campo no formul�rio");
define("_MD_FIELDNAMES_CHECKBOX","Caixa de Verifica��o");
define("_MD_FIELDNAMES_DATE","Data");
define("_MD_FIELDNAMES_DATETIME","Data/hora");
define("_MD_FIELDNAMES_LONGDATE","Data longa");
define("_MD_FIELDNAMES_GROUP","Grupo");
define("_MD_FIELDNAMES_GROUPMULTI","Multi-grupo");
define("_MD_FIELDNAMES_LANGUAGE","Idioma");
define("_MD_FIELDNAMES_RADIO","R�dio");
define("_MD_FIELDNAMES_SELECT","Escolha");
define("_MD_FIELDNAMES_SELECTMULTI","Multi-Escolha");
define("_MD_FIELDNAMES_TEXTAREA","�rea de Texto");
define("_MD_FIELDNAMES_DHTMLTEXTAREA","�rea de texto DHTML");
define("_MD_FIELDNAMES_TEXTBOX","Caixa de Texto");
define("_MD_FIELDNAMES_TIMEZONE","Zona de Tempo");
define("_MD_FIELDNAMES_YESNO","Sim/N�o");

define("_MD_FIELDNAMES_ADDRESS","Endere�os");
define("_MD_FIELDNAMES_GALLERY","Galeria de Imagem");
define("_MD_FIELDNAMES_RATING","Vota��es");
define("_MD_FIELDNAMES_LOCATIONMAP","Mapa - Localiza��o");

define("_MD_WIDTH","Largura");
define("_MD_HEIGHT","Altura");
define("_MD_ROWS","Fileiras");
define("_MD_COLS","Colunas");
define("_MD_SIZE","Tamanho");
define("_MD_MAXSIZE","Tamanho M�ximo");
define("_MD_DEFAULTVALUE","Valor padr�o");
define("_MD_MULTIPLE","M�ltiplos");
define("_MD_CHECKED","Verificado");
define("_MD_DELETE_CAT"," Excluir categoria");
define("_MD_CONFIRM_DELETECAT_FORM","Confirme a elimina��o da categoria");
define("_MD_DELETE_CAT_YN","Tem certeza de que deseja apagar esta categoria?");
define("_MD_CAT_DELETES","Categoria apagada com sucesso");

//Subscription offers management
define("_MD_SUBSCR_OFFERS","Ofertas de Assinaturas");
define("_MD_OFFERTITLE","T�tulo");
define("_MD_ITEMTYPES","N�mero tipos");
define("_MD_ITEMTYPE_NAME","Nome do Tipo");
define("_MD_ITEMTYPE_LEVEL","N�vel");
define("_MD_OFFERDURATION","Dura��o");
define("_MD_ADD_SUBSCR_OFFER","Adicionar subscri��o de oferta");
define("_MD_ADD_OFFER_FORM","Adicionar formul�rio de inscri��o de oferta");
define("_MD_ADD_ITEMTYPE_FORM","Adicionar tipo de item no formul�rio");
define("_MD_EDIT_ITEMTYPE_FORM","Editar tipo de item no formul�rio");
define("_MD_ADD_ITEMTYPE","Incluir tipo de item");
define("_MD_OFFER_TITLE","T�tulo de Assinaturas");
define("_MD_SUBSCR_ITEMTYPE","N�vel de Assinaturas");
define("_MD_SUBSCR_TYPE","Tipo de Assinatura");
define("_MD_SUBSCR_FORM","Formul�rio de Incri��o");
define("_MD_UPDATE_SUBSCR_FORM","Atualizar formul�rio de Inscri��o");
define("_MD_FORWARDED_PAYMENT_PAGE","Voc� ser� encaminhado para o formul�rio de pagamento de inscri��o.");
define("_MD_OFFER_DURATION","Dura��o");
define("_MD_OFFER_COUNT","Conta");
define("_MD_OFFER_PRICE","Pre�o");
define("_MD_OFFER_ACTIVEYN","Ativo S/N");
define("_MD_OFFER_ACTIVE","Ativar");
define("_MD_OFFER_DESCR","Descri��o");
define("_MD_OFFER_CURRENCY","Moeda");
define("_MD_INVALID_OFFERID","Esta ID de oferta n�o � v�lida. Voc� ser� redirecionado para a p�gina principal de inscri��es.");
define("_MD_INVALID_TYPEID","Este tipo ID n�o � v�lido. Voc� ser� redirecionado para a p�gina principal de inscri��es.");

//Extension manager
define("_MD_SELECT_FORMTYPE","Selecione um tipo de campo antes de usar o gerente de extens�o.");
define("_MD_EXTMANAGER","Gerenciamento de Extens�o");

//Edit item form
define("_MD_ONLYADMIN_ALLOWED_TO_EDIT","Somente o administrador tem permiss�o para editar uma lista que j� foi aprovada.");
define("_MD_EDITITEM_FORM","Editar lista no formul�rio");
define("_MD_EDITITEMTYPE_FORM","Editar tipo de item do formul�rio");
define("_MD_SELECT_ITEMTYPE","Selecione tipo de item");
define("_MD_ITEMCATEGORIES","Categorias Relacionadas");
define("_MD_EDIT_CATEGORIES","Editar categorias");
define("_MD_ITEM_UPDATED","Listagem atualizada");
define("_MD_CATEGORIES_UPDATED","Categorias atualizadas");
define("_MD_VIEWITEM","Ver lista");
define("_MD_LANG_EDIT_ITEM","Editar lista");
define("_MD_CUSTOM_TITLE","T�tulo ");
define("_MD_CUSTOM_VALUE","Valor ");
define("_MD_EDIT_INVALID_VALUE","Valor inv�lido para o endere�o");
define("_MD_NOVALIDITEM","Nenhum item selecionado � v�lido");
define("_MD_NOVALIDITEM_IDMISSING","Nenhum item selecionado � v�lido. N�mero do ID est� faltando.");
define("_MD_NOVALIDITEM_TITLEMISSING","Nenhum item selecionado � v�lido. N�mero do t�tulo est� faltando.");
define("_MD_NOVALIDORDER","Nenhum v�lido fim selecionados"); // GibaPhp - precisa de revis�o.

//Confirm delete listing
define("_MD_CONFIRM_DELETELISTING_FORM","Confirme para apagar a listagem do formul�rio");
define("_MD_DELETEYN","Tem certeza de que deseja excluir esta lista?");



//Submit form frontside
define("_MD_SELECTCAT_FORM","Selecione o formul�rio da categoria"); 
define("_MD_SUBMITLISTING_FORM","Enviar listagem no formul�rio");
define("_MD_NOCATEGORYMATCH","Pelo menos uma categoria deve ser selecionada para uma nova listagem");
define("_MD_NODIRECTORYSELECTED","Um diret�rio deve ser selecionado antes de apresentar uma listagem.");
define("_MD_NOACTIVECATEGORIES","N�o existem quaisquer categorias escolhidas neste diret�rio.");


//Frontside index
define("_MD_INTERESTING_LISTING","Interessantes diret�rios no %s");  // %s is your site name
define("_MD_INTERESTING_LISTING_FOUND","Aqui est� uma interessante lista que encontramos no %s");  // %s is your site name
define("_MD_NOACTIVEDIRECTORIES","N�o h� listas ativas neste momento.");
define("_MD_DIRECTORIES_HEADER","Diret�rios");
define("_MD_LISTINGS","Listagens");
define("_MD_SUBMITLISTING","Enviar nova listagem");

//Frontside edit
define("_MD_PUBLISH_LISTING","Publicando Listagem");
define("_MD_SUBMITTED_PUBLICATION","Enviados para publica��o");
define("_MD_DF_ADDRESS","Endere�os");
define("_MD_DF_ADDRESS2","Endere�os2");
define("_MD_DF_ZIP","C�digo Postal");
define("_MD_DF_POSTCODE","Cep");
define("_MD_DF_LAT","Latitude");
define("_MD_DF_LON","Longitude");
define("_MD_DF_PHONE","N�mero de Telefone");
define("_MD_DF_FAX","N�mero de Fax");
define("_MD_DF_MOBILE","N�mero de Celular");
define("_MD_DF_CITY","Cidade");
define("_MD_DF_COUNTRY","Pa�s");
define("_MD_DF_TYPENAME","Nome do Tipo de endere�o");
define("_MD_DF_USELOCYN", _MD_USELOCYN);

//Frontside listing
define("_MD_LANG_ITEMTITLE","T�tulo");
define("_MD_LANG_SUBSCR_OFFERS_HEADER","Assinaturas de ofertas");
define("_MD_LANG_SUBSCR_ACTIVE_ORDERS_HEADER","Inscri��es Ativas");
define("_MD_LANG_CURRENT_SUBSCR","Inscri��es Atuais");
define("_MD_LANG_ORDERNAME","Nome do pagamento");
define("_MD_LANG_ACTIONS","A��es");
define("_MD_LANG_TERMINATE_ORDER","Apagar este pagamento");
define("_MD_LANG_TERMINATE_ORDER_ALT","Apagar");
define("_MD_LANG_RENEW_SUBSCRIPTION","Renovar esta inscri��o");
define("_MD_LANG_RENEW_SUBSCRIPTION_ALT","Renovar");
define("_MD_SUBSCR_TYPE_NOTSELECTED","Selecione um tipo de subscri��o primeiro.");
define("_MD_LANG_STARTDATE","Data de in�cio");
define("_MD_NORIGHTS","Voc� n�o tem direitos suficientes para ver esta p�gina. Entre em contato com o administrador do site se voc� acha que deveriam ter direitos de acesso a esta p�gina.");
define("_MD_CONFIRMATION","Confirma��o");
define("_MD_CONFIRM_TERMINATE_TITLE","Confirme a elimina��o");
define("_MD_CONFIRM_TERMINATION_TEXT","Por favor, confirme que voc� deseja apagar este fim. Pressione o bot�o 'Continuar' para confirmar ou pressione o bot�o 'Voltar' quando voc� desejar o cancelamento desta a��o.");
define("_MD_LANG_BILLTO","Bill at� � data"); // GibaPhp revisar aqui.
define("_MD_LANG_ENDDATE","Data Final");
define("_MD_LANG_PAYMENTSTATUS","Status do Pagamento");
define("_MD_LANG_NO_SUBSCR_MOMENT","Atualmente, esta lista n�o tem uma assinatura.");
define("_MD_LANG_SUBSCRIBE","Assinar");
define("_MD_LANG_INCOMPLETE","Incompleto");
define("_MD_LANG_ITEMDESCRIPTION","Descri��o");
define("_MD_EDITTHISLISTING","[Editar esta listagem]");
define("_MD_VIEWSUBSCRIPTIONS","Ver subscri��o");
define("_MD_ITEM_NOT_EXIST","Este item n�o pode ser encontrado.");
define("_MD_SELECT_STARTDATE","Selecione a data de in�cio");
define("_MD_AUTORENEWYN","Auto renovar subscri��o?");
define("_MD_ORDER_DELETED","A autoriza��o de pagamento foi exclu�da com �xito.");
define("_MD_EDIT_LISTING","Editar listagem");

//Order payment
define("_MD_LANG_SUBSCR_PAYMENT","Assinaturas e pagamento");
define("_MD_ORDER_PAYMENT_FORM","Ordem de pagamento");
define("_MD_PAY_FIRSTNAME","Primeiro nome");
define("_MD_PAY_LASTNAME","�ltimo nome");
define("_MD_PAY_ADDRESS1","Endere�o linha 1");
define("_MD_PAY_ADDRESS2","Endere�o linha 2");
define("_MD_PAY_CITY","Cidade");
define("_MD_PAY_STATE","Estado");
define("_MD_PAY_ZIP","Cep");
define("_MD_PAY_EMAIL","Endere�o de E-mail");
define("_MD_PAY_PHONE1","N�mero de Telefone");
define("_MD_ORDER_PROCESSED","Queremos agradecer-lhe pelo seu pagamento. Seu pedido ser� processado o mais rapidamente poss�vel.");
define("_MD_ORDER_ALREADY_PROCESSED","Esta ordem de pagamento j� foi processada. Voc� ser� encaminhado para a p�gina de assinatura.");
define("_MD_PAY_WITH","Pagamento com");


//Frontside search
define("_MD_SEARCHRESULTS_TITLE","Os resultados da pesquisa"); 
define("_MD_LISTINGS_FOUND","Listagens encontradas"); 

//Frontside advanced search
define("_MD_ADVSEARCH_FORM","Formul�rio de pesquisa avan�ada");
define("_MD_SEARCHSTRING","Caracteres a Pesquisar");
define("_MD_EQUAL_TO","Igual ao");
define("_MD_NOT_EQUAL_TO","N�o � igual a");
define("_MD_BEGINSWITH","Come�a com");
define("_MD_ENDSWITH","Termina com");
define("_MD_CONTAINS","Cont�m");
define("_MD_NOTCONTAIN","N�o cont�m");
define("_MD_SMALLER_THAN","Menor que");
define("_MD_GREATER_THAN","Maior que");
define("_MD_PAGE_OF_PAGES","<div align=\"right\"><strong>P�gina %s de %s</strong></div>");
define("_MD_LISTINGS_FOUND_ADV","<div align=\"right\">%s listagens encontradas</strong></div>");
define("_MD_PAGES","<strong>P�ginas:&nbsp;</strong>");
define("_MD_NEW_SEARCH_ADV","<div align=\"right\"><strong><a href=\"advancedsearch.php?dirid=%s\">[ Nova pesquisa ]</a></strong></div>");
define("_MD_SEARCH_ADV","<div align=\"right\"><strong><a href=\"advancedsearch.php?dirid=%s\">[ Pesquisa avan�ada ]</a></strong></div>");

//Frontside addcoupon
define("_MD_COUPONHEADER", "Cupom Rubrica");
define("_MD_COUPONHITS", "Contador");
define("_MD_COUPONIMG", "Imagem do cupom: /uploads/)");
define("_MD_SAVINGS", "Ofertas especiais");
define("_MD_COUPONFORM", "Incluir/Editar Cupons");
define("_MD_ADDCOUPON", "Incluir Cupom");
define("_MD_EDITCOUPON", "Editar Cupom");
define("_MD_COUPONADDED", "Cupom adicionado com sucesso");
define("_MD_DELCOUPON", "Apagar Cupom");
define("_MD_COUPONDELETED", "Cupom apagado com sucesso");
define("_MD_ERR_COUPONIDMISSING", "C�digo do cupom est� faltando no formul�rio enviado.");
define("_MD_PRINTERFRIENDLY", "Imprimir p�gina Amig�vel ");
define("_MD_NOSAVINGS", "N�o h� ofertas especiais para esta categoria ou listagem");
define("_MD_COUPONEDITED", "Informa��es do Cupom Atualidas");
define("_MD_COUPONRUSURE", "Voc� tem certeza que deseja APAGAR este cupom?");
define("_MD_PUBLISHCOUPON", "Tempo de publica��o do Cupom");
define("_MD_EXPIRECOUPON", "Tempo para o Cupom expirar");
define("_MD_CONVERTLBR", "Converte Linebreaks"); // GibaPhp - precisa revis�o...
define("_MD_PUBLISHEDON", "V�lido de ");
define("_MD_EXPIRESON", "Expirar Em ");
define("_MD_SETEXPIRATION", "Definir Data de vencimento?");
define("_MD_SAVINGS_IMGTXT", "Ofertas especiais");
define("_MD_COUPONIMGMGR", "Use ImageManager (Veja a Toolbar acima) para fazer o upload de imagens.");
define("_MD_COUPSEL","Selecione Cupom");
define("_MD_COUPONUPDATED","Cupom atualizado.");

define("_MD_ADDBUTTON","Incluir");
define("_MD_DELBUTTON","Apagar");
define("_MD_LISTINGSCONF","Configura��o da Listagem");
define("_MD_DIRCONF","Configura��o de Diret�rios");
define("_MD_CATCONF","Configura��o de Categorias");
define("_MD_GENERALSET","EFQ - Configura��es Gerais de Diret�rios");

define("_MD_LISTINGSWAITING","Listagem � espera de valida��o");
define("_MD_NONEW_LISTINGS","N�o h� novas listagens � espera de aprova��o.");
define("_MD_BROKENREPORTS","Relatar listagens Quebradas");
define("_MD_MODREQUESTS","Listando os pedidos de modifica��es");
define("_MD_SUBMITTER","Apresentador");
define("_MD_VISIT","Visite");
define("_MD_SHOTMUST","A imagem de Screenshot dever� ser uma imagem v�lida no diret�rio %s (ex. shot.gif). Deixe-o em branco se n�o houver imagem.");
define("_MD_APPROVE","Aprovar");
define("_MD_DELETE","Apagar");
define("_MD_NOSUBMITTED","Nenhum Link foi enviado.");
define("_MD_ADDMAIN","Adicione uma categoria principal");
define("_MD_TITLEC","T�tulo: ");
define("_MD_IMGURL","URL da Imagem (esta imagem � OPCIONAL e a altura ser� redimensionada para 50): ");
define("_MD_ADD","Incluir");
define("_MD_ADDSUB","Incluir uma SUB-Categoria");
define("_MD_IN","Em");
define("_MD_ADDNEWLISTING","Incluir uma nova Listagem");
define("_MD_MODCAT","Modificar Categoria");
define("_MD_MODLISTING","Modificar Listagem");
define("_MD_TOTALVOTES","Votos na Listagem (total de votos: %s)");
define("_MD_USERTOTALVOTES","Votos de Usu�rios Registrados (total de votos: %s)");
define("_MD_ANONTOTALVOTES","Votos de Usu�rios an�nimos (total de votos: %s)");
define("_MD_USER","Usu�rio");
define("_MD_IP","Endere�o IP");
define("_MD_USERAVG","Classifica��o M�dia do Usu�rio");
define("_MD_TOTALRATE","Total de Classifica��es");
define("_MD_NOREGVOTES","Nenhum voto registrado de usu�rios");
define("_MD_NOUNREGVOTES","Nenhum voto registrado por an�nimos");
define("_MD_VOTEDELETED","Dados de votos apagados.");
define("_MD_NOBROKEN","Nenhum link quebrado foi reportado.");
define("_MD_IGNOREDESC","Ignorar (Ignora o relat�rio e s� elimina a <b>listagem de report sobre esta listagem</b>)");
define("_MD_DELETEDESC","Apagar (Apaga <b>Os dados reportados no site</b> e <b>relat�rio de link quebrado</b> para este link.)");
define("_MD_REPORTER","Remetente");
define("_MD_LISTINGSUBMITTER","Listando Apresentador");
define("_MD_IGNORE","Ignorar");
define("_MD_LINKDELETED","Listando Exclu�dos.");
define("_MD_BROKENDELETED","Relat�rio de listagem de links apagados.");
define("_MD_USERMODREQ","Listagem de pedido de modifica��es solicitadas pelo Usu�rio");
define("_MD_ORIGINAL","Original");
define("_MD_PROPOSED","Proposto");
define("_MD_OWNER","Propriet�rio: ");
define("_MD_NOMODREQ","Nenhum pedido de modifica��o foi encontrado.");
define("_MD_DBUPDATED","Banco de dados atualizado com Sucesso!");
define("_MD_MODREQDELETED","Solicita��o de Modifica��es Apagadas.");
define("_MD_IMGURLMAIN","URL da Imagem (Apenas OPCIONAL e v�lidos para as categorias principais. Altura da imagem ser� redimensionado para 50): ");
define("_MD_PARENT","Categoria M�e:");
define("_MD_SAVE","Salvar altera��es");
define("_MD_CATDELETED","Categoria Exclu�da.");
define("_MD_WARNING","CUIDADO: Tem certeza de que deseja apagar esta categoria e TODAS as suas listagens e Coment�rios?");
define("_MD_YES","Sim");
define("_MD_NO","N�o");
define("_MD_NEWCATADDED","Nova categoria adicionada com sucesso!");
define("_MD_ERROREXIST","ERRO: A listagem que voc� forneceu j� est� na base de dados!");
define("_MD_ERRORTITLE","ERRO: Voc� precisa inserir um T�TULO!");
define("_MD_ERRORDESC","ERRO: Voc� precisa inserir uma DESCRI��O!");
define("_MD_NEWLISTINGADDED","Nova listagem foi adicionada ao Banco de Dados.");
//define("_MD_YOURLISTING","Your Website Link at %s");
define("_MD_YOUCANBROWSE","Voc� pode navegar em nosso web links %s");
define("_MD_HELLO","Ol� %s");
define("_MD_WEAPPROVED","N�s aprovamos a listagem enviada.");
define("_MD_THANKSSUBMIT","Obrigado pelo seu envio!");
define("_MD_LISTINGUPDATED","A listagem foi atualizada com Sucesso!");
define("_MD_ISAPPROVED","N�s aprovamos a sua listagem de apresenta��o");

//Scheduler
define("_MD_NO_DIRECT_ACCESS","Esta p�gina n�o pode ser acessada diretamente.");
define("_MD_LANG_EXPIREWARNING_SUBJECT","Aviso sobre renova��o de Assinaturas .");
define("_MD_SCHEDULER_FINISHED","Agendador terminado.");
?>