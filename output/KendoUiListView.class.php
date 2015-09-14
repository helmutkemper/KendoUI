<?php

  /**
   * Represents the Kendo UI ListView widget. Inherits from Widget.
   * 
   * This class has been automatically generated by the class "classMaker.class.php" written by
   * Helmut Kemper <helmut.kemper@gmail.com> based into Kendo UI documents.
   * http://docs.telerik.com/kendo-ui/api/javascript/ui/listview
   * Setting autoBind to false is useful when multiple widgets are bound to the same data source. Disabling automatic binding ensures that the shared data source does not make more than one request to the remote service.
   */
  class KendoUiListView extends javascript
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
    
    public function toHtmlOutput ( $htmlIdAStr, $extraAStr )
    {
      self::$mainHtmlCodeCStr .= "<input id=\"{$htmlIdAStr}\" {$extraAStr}>";
    }
    
    
    //---------- fim codigo importante
    
    public function toJavaScriptOutput ()
    {
      if ( !is_null ( $this->nameVarCStr ) )
      {
        self::$mainJavaScriptCodeCStr .= "var {$this->nameVarCStr} = ";
      }
      self::$mainJavaScriptCodeCStr .= "$(\"#{$this->idElementCStr}\").KendoUiListView({";
      self::$mainJavaScriptCodeCStr .= $this->toObject( $this->dataCArr );
      self::$mainJavaScriptCodeCStr .= "});\r\n";
      $this->dataCArr = null;
      return self::$mainJavaScriptCodeCStr;
    }
    
    /**
     * If set to <b><u>false</u></b> the widget will not bind to the data source during initialization. In this case data binding will occur when the <a href="/kendo-ui/api/framework/datasource#events-change">change</a> event of the data source is fired. By default the widget will bind to the data source specified in the configuration.
     * Setting <code>autoBind</code> to <code>false</code> is useful when multiple widgets are bound to the same data source. Disabling automatic binding ensures that the shared data source does not make more than one request to the remote service.
     * 
     * ( ! ) Setting <b><u>autoBind</u></b> to <b><u>false</u></b> is useful when multiple widgets are bound to the same data source. Disabling automatic binding ensures that the shared data source does not make more than one request to the remote service.
     * @var $dataAX[ 'autoBind' ]: ( Boolean ) ( default: true )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/listview#configuration-autoBind
     * 
     * @code
       Example - disable automatic binding
        <div id ="listView"></div>
        <script>
        var dataSource = new kendo.data.DataSource({
          data: [ { name: "Jane Doe" }, { name: "John Doe" }]
        });
        $("#listView").kendoListView({
             dataSource: dataSource,
             template: "<div>#:name#</div>",
             autoBind: false
         });
        dataSource.read(); // "read()" will fire the "change" event of the dataSource and the widget will be bound
        </script>
     * @endcode
     * @throws string type error
     */
    public function autoBind ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "autoBind" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'autoBind' ] ) )
      {
        parent::addData ( "autoBind", $dataAX[ 'autoBind' ] );
        unset ( $dataAX[ 'autoBind' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'autoBind' ] ) )
      {
        throw new Exception ( "Type error - KendoUiListView::autoBind ( \$data[ 'autoBind' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * The data source of the widget which is used render table rows. Can be a JavaScript object which represents a valid data source configuration, a JavaScript array or an existing <a href="/kendo-ui/api/framework/datasource">kendo.data.DataSource</a> instance.
     * If the <b><u>dataSource</u></b> option is set to a JavaScript object or array the widget will initialize a new <a href="/kendo-ui/api/framework/datasource">kendo.data.DataSource</a> instance using that value as data source configuration.
     * If the <b><u>dataSource</u></b> option is an existing <a href="/kendo-ui/api/framework/datasource">kendo.data.DataSource</a> instance the widget will use that instance and will <strong>not</strong> initialize a new one.
     * @var $dataAX[ 'dataSource' ]: ( Object | Array | kendo.data.DataSource )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/listview#configuration-dataSource
     * 
     * @code
       Example - set dataSource as a JavaScript object
        <div id ="listView"></div>
        <script>
        $("#listView").kendoListView({
             dataSource: {
                data: [
                    { name: "Jane Doe" },
                    { name: "John Doe" }
                ]
            },
            template: "<div>#:name#</div>"
        });
        </script>
     * @endcode
     * @code
        Example - set dataSource as a JavaScript array
        <div id ="listView"></div>
        <script>
        $("#listView").kendoListView({
             dataSource: [
                { name: "Jane Doe" },
                { name: "John Doe" }
            ],
            template: "<div>#:name#</div>"
        });
        </script>
     * @endcode
     * @code
        Example - set dataSource as an existing kendo.data.DataSource instance
        <div id ="listView"></div>
        <script>
        var dataSource = new kendo.data.DataSource({
          data: [ { name: "Jane Doe" }, { name: "John Doe" }]
        });
        $("#listView").kendoListView({
            dataSource: dataSource,
            template: "<div>#:name#</div>"
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
        throw new Exception ( "Type error - KendoUiListView::dataSource ( \$data[ 'dataSource' ] type must be 'Object' | 'Array' | 'kendo.data.DataSource'" );
      }
      
    }
    
    
    /**
     * Specifies ListView item template in edit mode.
     * @var $dataAX[ 'editTemplate' ]: ( Function )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/listview#configuration-editTemplate
     * 
     * @code
       Example of
        <script type="text/x-kendo-tmpl" id="template">
             <div>
               <dl>
                 <dt>Name</dt> <dd>#:name#</dd>
                 <dt>Age</dt> <dd>#:age#</dd>
               </dl>
               <div>
                   <a class="k-button k-edit-button" href="\\\\#"><span class="k-icon k-edit"></span></a>
                   <a class="k-button k-delete-button" href="\\\\#"><span class="k-icon k-delete"></span></a>
               </div>
             </div>
         </script>
        
         <script type="text/x-kendo-tmpl" id="editTemplate">
             <div>
               <dl>
                 <dt>Name</dt>
                 <dd><input type="text" data-bind="value:name" name="name" required="required" /></dd>
                 <dt>Age</dt>
                 <dd><input type="text" data-bind="value:age" data-role="numerictextbox" data-type="number" name="age" required="required" /></dd>
               </dl>
               <div>
                   <a class="k-button k-update-button" href="\\\\#"><span class="k-icon k-update"></span></a>
                   <a class="k-button k-cancel-button" href="\\\\#"><span class="k-icon k-cancel"></span></a>
               </div>
             </div>
         </script>
        
         <div id="listView"></div>
         <script>
         $("#listView").kendoListView({
            template: kendo.template($("#template").html()),
            editTemplate: kendo.template($("#editTemplate").html()),
            dataSource: {
                data: [
                    { id: 1, name: "Jane Doe", age: 47 },
                    { id: 2, name: "John Doe", age: 50 }
                ],
                schema: {
                    model: {
                        id: "id",
                        fields: {
                            id: { type: "number" },
                            name: { type: "string" },
                            age: { type: "number" }
                        }
                    }
                }
            }
         });
         </script>
     * @endcode
     * @throws string type error
     */
    public function editTemplate ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "editTemplate" => $dataAX );
      
      if ( is_string ( $dataAX[ 'editTemplate' ] ) )
      {
        parent::addData ( "editTemplate", $dataAX[ 'editTemplate' ] );
        unset ( $dataAX[ 'editTemplate' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'editTemplate' ] ) )
      {
        throw new Exception ( "Type error - KendoUiListView::editTemplate ( \$data[ 'editTemplate' ] type must be 'Function'" );
      }
      
    }
    
    
    /**
     * Indicates whether keyboard navigation is enabled/disabled.
     * @var $dataAX[ 'navigatable' ]: ( Boolean ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/listview#configuration-navigatable
     * 
     * @code
       Example
         <div id ="listView"></div>
         <script>
         $("#listView").kendoListView({
            dataSource: {
                data: [
                    { name: "Jane Doe" },
                    { name: "John Doe" }
                ]
            },
            template: "<div>#:name#</div>",
            navigatable: true
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function navigatable ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "navigatable" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'navigatable' ] ) )
      {
        parent::addData ( "navigatable", $dataAX[ 'navigatable' ] );
        unset ( $dataAX[ 'navigatable' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'navigatable' ] ) )
      {
        throw new Exception ( "Type error - KendoUiListView::navigatable ( \$data[ 'navigatable' ] type must be 'Boolean'" );
      }
      
    }
    
    
    /**
     * Indicates whether selection is enabled/disabled. Possible values:
     * <b>true</b> - Single item selection.
     * <b>true</b> - Single item selection.
     * <b>"multiple"</b> - Multiple item selection.
     * @var $dataAX[ 'selectable' ]: ( Boolean | String ) ( default: false )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/listview#configuration-selectable
     * 
     * @code
       true

Single item selection.

"single"

Single item selection.

"multiple"

Multiple item selection.

Example of ListView with multiple selection enabled
         <div id ="listView"></div>
         <script>
         $("#listView").kendoListView({
            dataSource: {
                data: [
                    { name: "Jane Doe" },
                    { name: "John Doe" }
                ]
            },
            template: "<div>#:name#</div>",
            selectable: "multiple"
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function selectable ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "selectable" => $dataAX );
      
      if ( is_bool ( $dataAX[ 'selectable' ] ) )
      {
        parent::addData ( "selectable", $dataAX[ 'selectable' ] );
        unset ( $dataAX[ 'selectable' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( is_string ( $dataAX[ 'selectable' ] ) )
      {
        parent::addData ( "selectable", $dataAX[ 'selectable' ] );
        unset ( $dataAX[ 'selectable' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'selectable' ] ) )
      {
        throw new Exception ( "Type error - KendoUiListView::selectable ( \$data[ 'selectable' ] type must be 'Boolean' | 'String'" );
      }
      
    }
    
    
    /**
     * Specifies ListView item template.
     * @var $dataAX[ 'template' ]: ( Function )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/listview#configuration-template
     * 
     * @code
       Example
         <script type="text/kendo-x-tmpl" id="template">
            <div>
                Item template for #:name#
            </div>
         </script>
        
         <div id ="listView"></div>
         <script>
         $("#listView").kendoListView({
            dataSource: {
                data: [
                    { name: "Jane Doe" },
                    { name: "John Doe" }
                ]
            },
            template: kendo.template($("#template").html())
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
        throw new Exception ( "Type error - KendoUiListView::template ( \$data[ 'template' ] type must be 'Function'" );
      }
      
    }
    
    
    /**
     * Template to be used for rendering the alternate items in the ListView.
     * @var $dataAX[ 'altTemplate' ]: ( Function )
     * @see http://docs.telerik.com/kendo-ui/api/javascript/ui/listview#configuration-altTemplate
     * 
     * @code
       Example of alternate item template
         <script type="text/kendo-x-tmpl" id="template">
            <div>
                Item template for #:name#
            </div>
         </script>
        
         <script type="text/kendo-x-tmpl" id="altTemplate">
            <div>
                Alternate item template for #:name#
            </div>
         </script>
        
         <div id ="listView"></div>
         <script>
         $("#listView").kendoListView({
            dataSource: {
                data: [
                    { name: "Jane Doe" },
                    { name: "John Doe" }
                ]
            },
            template: kendo.template($("#template").html()),
            altTemplate: kendo.template($("#altTemplate").html())
        });
        </script>
     * @endcode
     * @throws string type error
     */
    public function altTemplate ( $dataAX )
    {
      if ( !is_string ( $this->outputCStr ) )
      {
        $this->outputCStr = '';
      }
      
      $dataAX = array ( "altTemplate" => $dataAX );
      
      if ( is_string ( $dataAX[ 'altTemplate' ] ) )
      {
        parent::addData ( "altTemplate", $dataAX[ 'altTemplate' ] );
        unset ( $dataAX[ 'altTemplate' ] );
        parent::garbageCollector ( $dataAX );
      }
      else if ( isset ( $dataAX[ 'altTemplate' ] ) )
      {
        throw new Exception ( "Type error - KendoUiListView::altTemplate ( \$data[ 'altTemplate' ] type must be 'Function'" );
      }
      
    }
    
    
  }