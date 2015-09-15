# KendoUI

Pessoal,

A classe **classMaker** foi feita por mim para facilitar o uso do **KendoUI** ( http://www.telerik.com/kendo-ui ) da **Telerik** ( http://www.telerik.com ) e objetivo dessa classe é criar uma classe **php** para cada componente disponibilizado pelo **KendoUI**.

Para quem não está familiarizado com o KendoUI ele é um excelente framework Java Script e serve para montar a parte do frontend do site com componentes de excelente qualidade. O problema é apenas o preço, e a versão mais barata, a minha, não dá suporte ao backend, então eu fiz este código para poder ter minhas próprias classes **php** funcionando de forma correta e prática. 

### Funcionamento

A classe executa a leitura do endereço passado na inicialização e em seguida trata o texto, seprando os elementos da documentação oficial e em seguida usa esses elementos para montar uma nova classe **php** devidamente documentada e quase pronta para o uso.

Caso seja a primeira vez que o código roda, ele irá criar dentro do diretório **"./class/output/"** um novo arquivo contendo a nova classe, porém, se o código já tiver rodado alguma vez, antes de reescrever o arquivo de saída, a classe vai procurar pelo trexo de código abaixo e salvar, permitindo que você possa fazer alterações na classe que não sejam perdidas.

```
//---------- inicio codigo importante
//
//Coisas que não serão apagadas podem ser digitadas aqui dentro.
//

public function toHtmlOutput ()
{
  self::$mainHtmlCodeCStr .= "<input id=\"{$this->idElementCStr}\" {$this->htmlTagExtraCStr}>";
  return self::$mainHtmlCodeCStr;
}


//---------- fim codigo importante
```

Apenas tenha em mente de **não alterar as linhas de comentários**, ou o processo vai falhar. Também é bom verificar se o elemento html do método **toHtmlOutput ()** está correto.

Perceba ainda a necessidade da classe **javascript.class.php** contida neste repositório para que a nova classe possa funcionar.

### Instruções de uso

Coloque o arquivo da classe no seu servidor e depois instancie a classe da seguinte forma:

```
new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete" );
```

Veja os exemplos que eu testei:

```
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/button" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/calendar" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/colorpalette" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/colorpicker" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/combobox" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/contextmenu" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/datepicker" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/datetimepicker" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/draggable" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/dropdownlist" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/droptarget" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/droptargetarea" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/flatcolorpicker" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/listview" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/maskedtextbox" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/menu" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/multiselect" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/notification" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/numerictextbox" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/pager" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/panelbar" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/pivotconfigurator" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/pivotgrid" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/rangeslider" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/responsivepanel" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/slider" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/sortable" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/splitter" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/tabstrip" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/timepicker" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/toolbar" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/tooltip" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/treelist" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/treeview" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/upload" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/validator" );
  $o = new classMaker( "http://docs.telerik.com/kendo-ui/api/javascript/ui/window" );
```

No primeiro exemplo, é usada a URL do módulo **autocomplete**, onde a documentação do mesmo fica em **"http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete"**. Após o código rodar, a mesmo vai gerar o seguinte código no diretório de saída:

```php
./class/output/KendoUIAutoComplete.class.php
```

```php
<?php

  /**
   * Represents the Kendo UI AutoComplete widget. Inherits from Widget.
   * 
   * This class has been automatically generated by the class "classMaker.class.php" written by
   * Helmut Kemper <helmut.kemper@gmail.com> based into Kendo UI documents.
   * http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete
   * Important: The Kendo UI AutoComplete should be created from an input HTML element.
   */
  class KendoUiAutoComplete extends javascript
  {
    private $outputCStr;
    private $idElementCStr;
    private $nameVarCStr;
    private $htmlTagExtraCStr;
    
    function __construct ( $idElementAStr, $nameVarAStr = null, $htmlTagExtraAStr = null )
    {
      $this->idElementCStr = $idElementAStr;
      $this->nameVarCStr = $nameVarAStr;
      $this->htmlTagExtraCStr = $htmlTagExtraAStr;
    }
    
    //---------- inicio codigo importante
    //
    //Coisas que não serão apagadas podem ser digitadas aqui dentro.
    //
    
    public function toHtmlOutput ()
    {
      self::$mainHtmlCodeCStr .= "<input id=\"{$this->idElementCStr}\" {$this->htmlTagExtraCStr}>";
      return self::$mainHtmlCodeCStr;
    }
    
    
    //---------- fim codigo importante
    
    public function toJavaScriptOutput ()
    {
      if ( !is_null ( $this->nameVarCStr ) )
      {
        self::$mainJavaScriptCodeCStr .= "var {$this->nameVarCStr} = ";
      }
      self::$mainJavaScriptCodeCStr .= "$(\"#{$this->idElementCStr}\").KendoUiAutoComplete({";
      self::$mainJavaScriptCodeCStr .= $this->toObject( $this->dataCArr );
      self::$mainJavaScriptCodeCStr .= "});\r\n";
      $this->dataCArr = null;
      return self::$mainJavaScriptCodeCStr;
    }
    
    /**
     * Configures the opening and closing animations of the suggestion popup. Setting the <b><u>animation</u></b> option to <b><u>false</u></b> will disable the opening and closing animations. As a result the suggestion popup will open and close instantly.
     * @var $dataAX[ 'animation' ]: ( Object )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-animation
     * 
     * @code
       Example - disable open and close animations
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          animation: false
        });
        </script>
     * @endcode
     * @code
        Example - configure the animation
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          animation: {
           close: {
             effects: "fadeOut zoom:out",
             duration: 300
           },
           open: {
             effects: "fadeIn zoom:in",
             duration: 300
           }
          }
        });
        </script>
     * @endcode
     * 
     * The animation played when the suggestion popup is closed.
     * @var $dataAX[ 'animation' ][ 'close' ]: ( Object )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-animation.close
     * 
     * @code
       Example - configure the close animation
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          animation: {
           close: {
             effects: "zoom:out",
             duration: 300
           }
          }
        });
        </script>
     * @endcode
     * @code
        Example - configure the open animation
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          animation: {
           open: {
             effects: "zoom:in",
             duration: 300
           }
          }
        });
        </script>
     * @endcode
     * 
     * The animation played when the suggestion popup is opened.
     * @var $dataAX[ 'animation' ][ 'open' ]: ( Object )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-animation.open
     * 
     * @code
       Example - configure the close animation
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          animation: {
           close: {
             effects: "zoom:out",
             duration: 300
           }
          }
        });
        </script>
     * @endcode
     * @code
        Example - configure the open animation
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          animation: {
           open: {
             effects: "zoom:in",
             duration: 300
           }
          }
        });
        </script>
     * @endcode
     * 
     * The duration of the close animation in milliseconds.
     * @var $dataAX[ 'animation' ][ 'close' ][ 'duration' ]: ( Number ) ( default: 100 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-animation.close.duration
     * 
     * The effect(s) to use when playing the close animation. Multiple effects should be separated with a space.
     * <a href="/kendo-ui/api/framework/fx/common">Complete list of available animations</a>
     * @var $dataAX[ 'animation' ][ 'close' ][ 'effects' ]: ( String )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-animation.close.effects
     * 
     * The duration of the open animation in milliseconds.
     * @var $dataAX[ 'animation' ][ 'open' ][ 'duration' ]: ( Number ) ( default: 200 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-animation.open.duration
     * 
     * The effect(s) to use when playing the open animation. Multiple effects should be separated with a space.
     * <a href="/kendo-ui/api/framework/fx/common">Complete list of available animations</a>
     * @var $dataAX[ 'animation' ][ 'open' ][ 'effects' ]: ( String )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-animation.open.effects
     * @throws string type error
     */
    public function animation ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "animation" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'animation' ][ 'close' ][ 'duration' ] ) )
      {
        parent::addData ( "animation.close.duration", $dataAX[ 'animation' ][ 'close' ][ 'duration' ] );
        unset ( $dataAX[ 'animation' ][ 'close' ][ 'duration' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'close' ][ 'duration' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::animation ( \$data[ 'animation' ][ 'close' ][ 'duration' ] type must be 'Number'" );
      }
      
      if ( is_string ( $dataAX[ 'animation' ][ 'close' ][ 'effects' ] ) )
      {
        parent::addData ( "animation.close.effects", $dataAX[ 'animation' ][ 'close' ][ 'effects' ] );
        unset ( $dataAX[ 'animation' ][ 'close' ][ 'effects' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'close' ][ 'effects' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::animation ( \$data[ 'animation' ][ 'close' ][ 'effects' ] type must be 'String'" );
      }
      
      if ( is_numeric ( $dataAX[ 'animation' ][ 'open' ][ 'duration' ] ) )
      {
        parent::addData ( "animation.open.duration", $dataAX[ 'animation' ][ 'open' ][ 'duration' ] );
        unset ( $dataAX[ 'animation' ][ 'open' ][ 'duration' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'open' ][ 'duration' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::animation ( \$data[ 'animation' ][ 'open' ][ 'duration' ] type must be 'Number'" );
      }
      
      if ( is_string ( $dataAX[ 'animation' ][ 'open' ][ 'effects' ] ) )
      {
        parent::addData ( "animation.open.effects", $dataAX[ 'animation' ][ 'open' ][ 'effects' ] );
        unset ( $dataAX[ 'animation' ][ 'open' ][ 'effects' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'open' ][ 'effects' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::animation ( \$data[ 'animation' ][ 'open' ][ 'effects' ] type must be 'String'" );
      }
      
      if ( is_array ( $dataAX[ 'animation' ][ 'close' ] ) )
      {
        parent::addData ( "animation.close", $dataAX[ 'animation' ][ 'close' ] );
        unset ( $dataAX[ 'animation' ][ 'close' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'close' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::animation ( \$data[ 'animation' ][ 'close' ] type must be 'Object'" );
      }
      
      if ( is_array ( $dataAX[ 'animation' ][ 'open' ] ) )
      {
        parent::addData ( "animation.open", $dataAX[ 'animation' ][ 'open' ] );
        unset ( $dataAX[ 'animation' ][ 'open' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ][ 'open' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::animation ( \$data[ 'animation' ][ 'open' ] type must be 'Object'" );
      }
      
      if ( is_array ( $dataAX[ 'animation' ] ) )
      {
        parent::addData ( "animation", $dataAX[ 'animation' ] );
        unset ( $dataAX[ 'animation' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'animation' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::animation ( \$data[ 'animation' ] type must be 'Object'" );
      }
      
    }
    
    
    /**
     * The data source of the widget which is used to display suggestions for the current value. Can be a JavaScript object which represents a valid data source configuration, a JavaScript array or an existing <a href="/kendo-ui/api/framework/datasource">kendo.data.DataSource</a> instance.
     * If the <b><u>dataSource</u></b> option is set to a JavaScript object or array the widget will initialize a new <a href="/kendo-ui/api/framework/datasource">kendo.data.DataSource</a> instance using that value as data source configuration.
     * If the <b><u>dataSource</u></b> option is an existing <a href="/kendo-ui/api/framework/datasource">kendo.data.DataSource</a> instance the widget will use that instance and will <strong>not</strong> initialize a new one.
     * @var $dataAX[ 'dataSource' ]: ( Object | Array | kendo.data.DataSource )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-dataSource
     * 
     * @code
       Example - set dataSource as a JavaScript object
        <input id="autocomplete" />
        <script>
        $("#autoComplete").kendoAutoComplete({
          dataSource: {
            data: ["One", "Two"]
          }
        });
        </script>
     * @endcode
     * @code
        Example - set dataSource as a JavaScript array
        <input id="autocomplete" />
        <script>
        var data = ["One", "Two"];
        $("#autoComplete").kendoAutoComplete({
          dataSource: data
        });
        </script>
     * @endcode
     * @code
        Example - set dataSource as an existing kendo.data.DataSource instance
        <input id="autocomplete" />
        <script>
        var dataSource = new kendo.data.DataSource({
          transport: {
            read: {
              url: "http://demos.telerik.com/kendo-ui/service/products",
              dataType: "jsonp"
            }
          }
        });
        $("#autocomplete").kendoAutoComplete({
          dataSource: dataSource,
          dataTextField: "ProductName"
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function dataSource ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "dataSource" => $dataAX );
      
      if ( is_array ( $dataAX[ 'dataSource' ] ) )
      {
        parent::addData ( "dataSource", $dataAX[ 'dataSource' ] );
        unset ( $dataAX[ 'dataSource' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'dataSource' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::dataSource ( \$data[ 'dataSource' ] type must be 'Object' | 'Array' | 'kendo.data.DataSource'" );
      }
      
    }
    
    
    /**
     * The field of the data item used when searching for suggestions. This is the text that will be displayed in the list of matched results.
     * @var $dataAX[ 'dataTextField' ]: ( String ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-dataTextField
     * 
     * @code
       Example - set the dataTextField
        <input id="autocomplete" />
        <script>
        var data = [
          { id: 1, name: "Apples" },
          { id: 2, name: "Oranges" }
        ];
        $("#autocomplete").kendoAutoComplete({
          dataTextField: "name", // The widget is bound to the "name" field
          dataSource: data
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function dataTextField ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "dataTextField" => $dataAX );
      
      if ( is_string ( $dataAX[ 'dataTextField' ] ) )
      {
        parent::addData ( "dataTextField", $dataAX[ 'dataTextField' ] );
        unset ( $dataAX[ 'dataTextField' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'dataTextField' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::dataTextField ( \$data[ 'dataTextField' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * The delay in milliseconds between a keystroke and when the widget displays the suggestion popup.
     * @var $dataAX[ 'delay' ]: ( Number ) ( default: 200 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-delay
     * 
     * @code
       Example - set the delay
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          delay: 500
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function delay ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "delay" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'delay' ] ) )
      {
        parent::addData ( "delay", $dataAX[ 'delay' ] );
        unset ( $dataAX[ 'delay' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'delay' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::delay ( \$data[ 'delay' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * If set to <b><u>false</u></b> the widget will be disabled and will not allow user input. The widget is enabled by default and allows user input.
     * @var $dataAX[ 'enable' ]: ( Boolean ) ( default: true )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-enable
     * 
     * @code
       Example - disable the widget
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          enable: false
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function enable ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "enable" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'enable' ] ) )
      {
        parent::addData ( "enable", $dataAX[ 'enable' ] );
        unset ( $dataAX[ 'enable' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'enable' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::enable ( \$data[ 'enable' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * The filtering method used to determine the suggestions for the current value. The default filter is "startswith" - all data items which begin with the current widget value are displayed in the suggestion popup. The supported filter values are <b><u>startswith</u></b>, <b><u>endswith</u></b> and <b><u>contains</u></b>.
     * @var $dataAX[ 'filter' ]: ( String ) ( default: "startswith" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-filter
     * 
     * @code
       Example - set the filter
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          filter: "contains"
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function filter ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "filter" => $dataAX );
      
      if ( is_string ( $dataAX[ 'filter' ] ) )
      {
        parent::addData ( "filter", $dataAX[ 'filter' ] );
        unset ( $dataAX[ 'filter' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'filter' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::filter ( \$data[ 'filter' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * The <a href="/kendo-ui/api/framework/kendo#methods-template">template</a> used to render the fixed header group. By default the widget displays only the value of the current group.
     * @var $dataAX[ 'fixedGroupTemplate' ]: ( String | Function )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-fixedGroupTemplate
     * 
     * @code
       
        <input id="customers" style="width: 400px" />
        <script>
            $(document).ready(function() {
                $("#customers").kendoAutoComplete({
                    dataTextField: "ContactName",
                    fixedGroupTemplate: "Fixed group: #:data#",
                    height: 400,
                    dataSource: {
                        type: "odata",
                        transport: {
                            read: "http://demos.telerik.com/kendo-ui/service/Northwind.svc/Customers"
                        },
                        group: { field: "Country" }
                    }
                });
            });
        </script>
     * @endcode
     * @throws string type error
     */
    public function fixedGroupTemplate ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "fixedGroupTemplate" => $dataAX );
      
      if ( is_string ( $dataAX[ 'fixedGroupTemplate' ] ) )
      {
        parent::addData ( "fixedGroupTemplate", $dataAX[ 'fixedGroupTemplate' ] );
        unset ( $dataAX[ 'fixedGroupTemplate' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'fixedGroupTemplate' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::fixedGroupTemplate ( \$data[ 'fixedGroupTemplate' ] type must be 'String' | 'Function'" );
      }
      
    }
    
    
    /**
     * The <a href="/kendo-ui/api/framework/kendo#methods-template">template</a> used to render the groups. By default the widget displays only the value of the group.
     * @var $dataAX[ 'groupTemplate' ]: ( String | Function )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-groupTemplate
     * 
     * @code
       
        <input id="customers" style="width: 400px" />
        <script>
            $(document).ready(function() {
                $("#customers").kendoAutoComplete({
                    dataTextField: "ContactName",
                    groupTemplate: "Group: #:data#",
                    height: 400,
                    dataSource: {
                        type: "odata",
                        transport: {
                            read: "http://demos.telerik.com/kendo-ui/service/Northwind.svc/Customers"
                        },
                        group: { field: "Country" }
                    }
                });
            });
        </script>
     * @endcode
     * @throws string type error
     */
    public function groupTemplate ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "groupTemplate" => $dataAX );
      
      if ( is_string ( $dataAX[ 'groupTemplate' ] ) )
      {
        parent::addData ( "groupTemplate", $dataAX[ 'groupTemplate' ] );
        unset ( $dataAX[ 'groupTemplate' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'groupTemplate' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::groupTemplate ( \$data[ 'groupTemplate' ] type must be 'String' | 'Function'" );
      }
      
    }
    
    
    /**
     * The height of the suggestion popup in pixels. The default value is 200 pixels.
     * @var $dataAX[ 'height' ]: ( Number ) ( default: 200 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-height
     * 
     * @code
       Example - set the height
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          height: 500
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function height ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "height" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'height' ] ) )
      {
        parent::addData ( "height", $dataAX[ 'height' ] );
        unset ( $dataAX[ 'height' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'height' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::height ( \$data[ 'height' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * If set to <b><u>true</u></b> the first suggestion will be automatically highlighted.
     * @var $dataAX[ 'highlightFirst' ]: ( Boolean ) ( default: true )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-highlightFirst
     * 
     * @code
       Example - set highlightFirst
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          highlightFirst: false
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function highlightFirst ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "highlightFirst" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'highlightFirst' ] ) )
      {
        parent::addData ( "highlightFirst", $dataAX[ 'highlightFirst' ] );
        unset ( $dataAX[ 'highlightFirst' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'highlightFirst' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::highlightFirst ( \$data[ 'highlightFirst' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * If set to <b><u>false</u></b> case-sensitive search will be performed to find suggestions. The widget performs case-insensitive searching by default.
     * @var $dataAX[ 'ignoreCase' ]: ( Boolean ) ( default: true )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-ignoreCase
     * 
     * @code
       Example - disable case-insensitive suggestions
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          ignoreCase: false
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function ignoreCase ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "ignoreCase" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'ignoreCase' ] ) )
      {
        parent::addData ( "ignoreCase", $dataAX[ 'ignoreCase' ] );
        unset ( $dataAX[ 'ignoreCase' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'ignoreCase' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::ignoreCase ( \$data[ 'ignoreCase' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * The minimum number of characters the user must type before a search is performed. Set to higher value than <b><u>1</u></b> if the search could match a lot of items.
     * Widget will initiate a request when input value is cleared. If you would like to prevent this behavior please check the <a href="#events-filtering">filtering</a> event for more details.
     * 
     * ( ! ) Widget will initiate a request when input value is cleared. If you would like to prevent this behavior please check the <a href="#events-filtering">filtering</a> event for more details.
     * @var $dataAX[ 'minLength' ]: ( Number ) ( default: 1 )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-minLength
     * 
     * @code
       Example - set minLength
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          minLength: 3
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function minLength ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "minLength" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'minLength' ] ) )
      {
        parent::addData ( "minLength", $dataAX[ 'minLength' ] );
        unset ( $dataAX[ 'minLength' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'minLength' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::minLength ( \$data[ 'minLength' ] type must be 'Number'" );
      }
      
    }
    
    
    /**
     * The hint displayed by the widget when it is empty. Not set by default.
     * The Kendo UI AutoComplete widget could also use the value of the <b><u>placeholder</u></b> HTML attribute as hint.
     * @var $dataAX[ 'placeholder' ]: ( String ) ( default: "" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-placeholder
     * 
     * @code
       Example - specify placeholder
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          placeholder: "Enter value ..."
        });
        </script>
     * @endcode
     * @code
        Example - use the placeholder HTML attribute
        <input id="autocomplete" placeholder="Enter value..." />
        <script>
        $("#autocomplete").kendoAutoComplete();
        </script>
     * @endcode
     * @throws string type error
     */
    public function placeholder ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "placeholder" => $dataAX );
      
      if ( is_string ( $dataAX[ 'placeholder' ] ) )
      {
        parent::addData ( "placeholder", $dataAX[ 'placeholder' ] );
        unset ( $dataAX[ 'placeholder' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'placeholder' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::placeholder ( \$data[ 'placeholder' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * The options that will be used for the popup initialization. For more details about the available options refer to <a href="/kendo-ui/api/javascript/ui/popup">Popup</a> documentation.
     * @var $dataAX[ 'popup' ]: ( Object )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-popup
     * 
     * @code
       Example - append the popup to a specific element
        <div id="container">
            <input id="autocomplete" />
        </div>
        <script>
        $("#autocomplete").kendoAutoComplete({
          dataSource: [
            { id: 1, name: "Apples" },
            { id: 2, name: "Oranges" }
          ],
          dataTextField: "name",
          popup: {
            appendTo: $("#container")
          }
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function popup ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "popup" => $dataAX );
      
      if ( is_array ( $dataAX[ 'popup' ] ) )
      {
        parent::addData ( "popup", $dataAX[ 'popup' ] );
        unset ( $dataAX[ 'popup' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'popup' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::popup ( \$data[ 'popup' ] type must be 'Object'" );
      }
      
    }
    
    
    /**
     * The character used to separate multiple values. Empty by default.
     * @var $dataAX[ 'separator' ]: ( String ) ( default: "" )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-separator
     * 
     * @code
       Example - set separator to allow multiple values
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          separator: ", "
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function separator ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "separator" => $dataAX );
      
      if ( is_string ( $dataAX[ 'separator' ] ) )
      {
        parent::addData ( "separator", $dataAX[ 'separator' ] );
        unset ( $dataAX[ 'separator' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'separator' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::separator ( \$data[ 'separator' ] type must be 'String'" );
      }
      
    }
    
    
    /**
     * If set to <b><u>true</u></b> the widget will automatically use the first suggestion as its value.
     * @var $dataAX[ 'suggest' ]: ( Boolean ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-suggest
     * 
     * @code
       Example - enable automatic suggestion
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          suggest: true
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function suggest ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "suggest" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'suggest' ] ) )
      {
        parent::addData ( "suggest", $dataAX[ 'suggest' ] );
        unset ( $dataAX[ 'suggest' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'suggest' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::suggest ( \$data[ 'suggest' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * Specifies a static HTML content, which will be rendered as a header of the popup element.
     * <strong>Important</strong> Widget does not pass a model data to the header template. Use this option only with static HTML.
     * 
     * ( ! ) <strong>Important</strong> Widget does not pass a model data to the header template. Use this option only with static HTML.
     * @var $dataAX[ 'headerTemplate' ]: ( String | Function )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-headerTemplate
     * 
     * @code
       Example - specify headerTemplate as a string
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          dataSource: [
            { id: 1, name: "Apples" },
            { id: 2, name: "Oranges" }
          ],
          dataTextField: "name",
          headerTemplate: '<div><h2>Fruits</h2></div>'
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function headerTemplate ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "headerTemplate" => $dataAX );
      
      if ( is_string ( $dataAX[ 'headerTemplate' ] ) )
      {
        parent::addData ( "headerTemplate", $dataAX[ 'headerTemplate' ] );
        unset ( $dataAX[ 'headerTemplate' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'headerTemplate' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::headerTemplate ( \$data[ 'headerTemplate' ] type must be 'String' | 'Function'" );
      }
      
    }
    
    
    /**
     * The <a href="/kendo-ui/api/framework/kendo#methods-template">template</a> used to render the suggestions. By default the widget displays only the text of the suggestion (configured via <b><u>dataTextField</u></b>).
     * @var $dataAX[ 'template' ]: ( String | Function )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-template
     * 
     * @code
       Example - specify template as a function
        <input id="autocomplete" />
        <script id="template" type="text/x-kendo-template">
          <span>
            <img src="/img/#: id #.png" alt="#: name #" />
            #: name #
          </span>
        </script>
        <script>
        $("#autocomplete").kendoAutoComplete({
          dataSource: [
            { id: 1, name: "Apples" },
            { id: 2, name: "Oranges" }
          ],
          dataTextField: "name",
          template: kendo.template($("#template").html())
        });
        </script>
     * @endcode
     * @code
        Example - specify template as a string
        <input id="autocomplete" />
        <script>
        $("#autocomplete").kendoAutoComplete({
          dataSource: [
            { id: 1, name: "Apples" },
            { id: 2, name: "Oranges" }
          ],
          dataTextField: "name",
          template: '<span><img src="/img/#: id #.png" alt="#: name #" />#: name #</span>'
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function template ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "template" => $dataAX );
      
      if ( is_string ( $dataAX[ 'template' ] ) )
      {
        parent::addData ( "template", $dataAX[ 'template' ] );
        unset ( $dataAX[ 'template' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'template' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::template ( \$data[ 'template' ] type must be 'String' | 'Function'" );
      }
      
    }
    
    
    /**
     * Specifies the <a href="/kendo-ui/framework/mvvm/bindings/value">value binding</a> behavior for the widget when the initial model value is null. If set to true, the View-Model field will be updated with the selected item text field. If set to false, the View-Model field will be updated with the selected item.
     * @var $dataAX[ 'valuePrimitive' ]: ( Boolean ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-valuePrimitive
     * 
     * @code
       Example - specify that the View-Model field should be updated with the selected item text
        <input id="autocomplete" data-bind="value: productName, source: products" />
        
        <script>
        $("#autocomplete").kendoAutoComplete({
          valuePrimitive: true,
          dataTextField: "name"
        });
        var viewModel = kendo.observable({
          productName: null,
          products: [
            { id: 1, name: "Coffee" },
            { id: 2, name: "Tea" },
            { id: 3, name: "Juice" }
          ]
        });
        
        kendo.bind($("#autocomplete"), viewModel);
        </script>
     * @endcode
     * @throws string type error
     */
    public function valuePrimitive ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "valuePrimitive" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'valuePrimitive' ] ) )
      {
        parent::addData ( "valuePrimitive", $dataAX[ 'valuePrimitive' ] );
        unset ( $dataAX[ 'valuePrimitive' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'valuePrimitive' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::valuePrimitive ( \$data[ 'valuePrimitive' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * Enables the virtualization feature of the widget.
     * @var $dataAX[ 'virtual' ]: ( Boolean | Object ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-virtual
     * 
     * @code
       Example - AutoComplete with virtualized list
        <input id="orders" style="width: 400px" />
        <script>
            $(document).ready(function() {
                $("#orders").kendoAutoComplete({
                    template: "#= OrderID # | For: #= ShipName #, #= ShipCountry #",
                    dataTextField: "ShipName",
                    virtual: true,
                    height: 520,
                    dataSource: {
                        type: "odata",
                        transport: {
                            read: "http://demos.telerik.com/kendo-ui/service/Northwind.svc/Orders"
                        },
                        schema: {
                            model: {
                                fields: {
                                    OrderID: { type: "number" },
                                    Freight: { type: "number" },
                                    ShipName: { type: "string" },
                                    OrderDate: { type: "date" },
                                    ShipCity: { type: "string" }
                                }
                            }
                        },
                        pageSize: 80,
                        serverPaging: true,
                        serverFiltering: true
                    }
                });
            });
        </script>
     * @endcode
     * 
     * Specifies the height of the virtual item. All items in the virtualized list <strong>must</strong> have the same height. If the developer does not specify one, the framework will automatically set <b><u>itemHeight</u></b> based on the current theme and font size.
     * @var $dataAX[ 'virtual' ][ 'itemHeight' ]: ( Number ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-virtual.itemHeight
     * 
     * @code
       Example - AutoComplete with virtualized list
        <input id="orders" style="width: 400px" />
        <script>
            $(document).ready(function() {
                $("#orders").kendoAutoComplete({
                    template: "#= OrderID # | For: #= ShipName #, #= ShipCountry #",
                    dataTextField: "ShipName",
                    virtual: {
                        itemHeight: 26
                    },
                    height: 520,
                    dataSource: {
                        type: "odata",
                        transport: {
                            read: "http://demos.telerik.com/kendo-ui/service/Northwind.svc/Orders"
                        },
                        schema: {
                            model: {
                                fields: {
                                    OrderID: { type: "number" },
                                    Freight: { type: "number" },
                                    ShipName: { type: "string" },
                                    OrderDate: { type: "date" },
                                    ShipCity: { type: "string" }
                                }
                            }
                        },
                        pageSize: 80,
                        serverPaging: true,
                        serverFiltering: true
                    }
                });
            });
        </script>
     * @endcode
     * @code
        
        <input id="orders" style="width: 400px" />
        <script>
            $(document).ready(function() {
                $("#orders").kendoAutoComplete({
                    template: '<span class="order-id">#= OrderID #</span> #= ShipName #, #= ShipCountry #',
                    dataTextField: "ShipName",
                    virtual: {
                        itemHeight: 26,
                        valueMapper: function(options) {
                            $.ajax({
                                url: "http://demos.telerik.com/kendo-ui/service/Orders/ValueMapper",
                                type: "GET",
                                data: convertValues(options.value),
                                success: function (data) {
                                    //the **data** is either index or array of indices.
                                    //Example:
                                    // "Ernst Handel" -> 10 (index in the Orders collection)
                                    // ["Ernst Handel", "Que Delícia"] -> [10, 14] (indices in the Orders collection)
        
                                    options.success(data);
                                }
                            })
                        }
                    },
                    height: 520,
                    dataSource: {
                        type: "odata",
                        transport: {
                            read: "http://demos.telerik.com/kendo-ui/service/Northwind.svc/Orders"
                        },
                        pageSize: 80,
                        serverPaging: true,
                        serverFiltering: true
                    }
                });
            });
        
            function convertValues(value) {
                var data = {};
        
                value = $.isArray(value) ? value : [value];
        
                for (var idx = 0; idx < value.length; idx++) {
                    data["values[" + idx + "]"] = value[idx];
                }
        
                return data;
            }
        </script>
     * @endcode
     * 
     * The <b><u>valueMapper</u></b> function is <strong>mandatory</strong> for the functionality of the virtualized widget. The widget calls the <b><u>valueMapper</u></b> function when the widget receives a value, that is not fetched from the remote server yet. The widget will pass the selected value(s) in the <b><u>valueMapper</u></b> function. In turn, the valueMapper implementation should return the <strong>respective data item(s) index/indices</strong>.
     * @var $dataAX[ 'virtual' ][ 'valueMapper' ]: ( Function ) ( default: null )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/autocomplete#configuration-virtual.valueMapper
     * 
     * @code
       Example - AutoComplete with virtualized list
        <input id="orders" style="width: 400px" />
        <script>
            $(document).ready(function() {
                $("#orders").kendoAutoComplete({
                    template: "#= OrderID # | For: #= ShipName #, #= ShipCountry #",
                    dataTextField: "ShipName",
                    virtual: {
                        itemHeight: 26
                    },
                    height: 520,
                    dataSource: {
                        type: "odata",
                        transport: {
                            read: "http://demos.telerik.com/kendo-ui/service/Northwind.svc/Orders"
                        },
                        schema: {
                            model: {
                                fields: {
                                    OrderID: { type: "number" },
                                    Freight: { type: "number" },
                                    ShipName: { type: "string" },
                                    OrderDate: { type: "date" },
                                    ShipCity: { type: "string" }
                                }
                            }
                        },
                        pageSize: 80,
                        serverPaging: true,
                        serverFiltering: true
                    }
                });
            });
        </script>
     * @endcode
     * @code
        
        <input id="orders" style="width: 400px" />
        <script>
            $(document).ready(function() {
                $("#orders").kendoAutoComplete({
                    template: '<span class="order-id">#= OrderID #</span> #= ShipName #, #= ShipCountry #',
                    dataTextField: "ShipName",
                    virtual: {
                        itemHeight: 26,
                        valueMapper: function(options) {
                            $.ajax({
                                url: "http://demos.telerik.com/kendo-ui/service/Orders/ValueMapper",
                                type: "GET",
                                data: convertValues(options.value),
                                success: function (data) {
                                    //the **data** is either index or array of indices.
                                    //Example:
                                    // "Ernst Handel" -> 10 (index in the Orders collection)
                                    // ["Ernst Handel", "Que Delícia"] -> [10, 14] (indices in the Orders collection)
        
                                    options.success(data);
                                }
                            })
                        }
                    },
                    height: 520,
                    dataSource: {
                        type: "odata",
                        transport: {
                            read: "http://demos.telerik.com/kendo-ui/service/Northwind.svc/Orders"
                        },
                        pageSize: 80,
                        serverPaging: true,
                        serverFiltering: true
                    }
                });
            });
        
            function convertValues(value) {
                var data = {};
        
                value = $.isArray(value) ? value : [value];
        
                for (var idx = 0; idx < value.length; idx++) {
                    data["values[" + idx + "]"] = value[idx];
                }
        
                return data;
            }
        </script>
     * @endcode
     * @throws string type error
     */
    public function virtual ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "virtual" => $dataAX );
      
      if ( is_numeric ( $dataAX[ 'virtual' ][ 'itemHeight' ] ) )
      {
        parent::addData ( "virtual.itemHeight", $dataAX[ 'virtual' ][ 'itemHeight' ] );
        unset ( $dataAX[ 'virtual' ][ 'itemHeight' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'virtual' ][ 'itemHeight' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::virtual ( \$data[ 'virtual' ][ 'itemHeight' ] type must be 'Number'" );
      }
      
      if ( is_string ( $dataAX[ 'virtual' ][ 'valueMapper' ] ) )
      {
        parent::addData ( "virtual.valueMapper", $dataAX[ 'virtual' ][ 'valueMapper' ] );
        unset ( $dataAX[ 'virtual' ][ 'valueMapper' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'virtual' ][ 'valueMapper' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::virtual ( \$data[ 'virtual' ][ 'valueMapper' ] type must be 'Function'" );
      }
      
      if ( is_bool ( $dataAX[ 'virtual' ] ) )
      {
        parent::addData ( "virtual", $dataAX[ 'virtual' ] );
        unset ( $dataAX[ 'virtual' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( is_array ( $dataAX[ 'virtual' ] ) )
      {
        parent::addData ( "virtual", $dataAX[ 'virtual' ] );
        unset ( $dataAX[ 'virtual' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'virtual' ] ) )
      {
        throw new Exception ( "Type error - KendoUiAutoComplete::virtual ( \$data[ 'virtual' ] type must be 'Boolean' | 'Object'" );
      }
      
    }
    
    
  }
```

### Atenção:

Esta classe usa tags html muito bem padronizadas pela documentação e caso a documentação mude de padrão, a mesma deixa de funcionar.

Lembre-se, este conjunto de código é fornecido com o intuito de ajudar, porém, não há garantias de funcionamento ou qualquer forma de obrigação de suporte da minha parte para que você use o código.

O código é livre para ser copiado e alterado, porém, sempre que você fizer qualquer alteração no mesmo, você deve deixar claro que o seu trabalho se baseia no meu trabalho e divulgar o meu nome.

Ass. **Helmut Kemper** - **helmut.kemper@gmail.com**
