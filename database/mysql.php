<?php
Class mysql
{

    public $query;
    public $fetchAll;
    public $result;
    public $response;
    protected $config;
    protected $driver;
    protected $host;
    protected $port;
    protected $user;
    protected $pass;
    protected $dbname;
    protected $con;

    public function __construct( $config )
    {
        try
        {
            #array com dados do banco
            $this->config = $config;
            # Recupera os dados de conexao do config
            $this->dbname = $this->config['dblitus'];
            $this->driver = $this->config['driver'];
            $this->host = $this->config['179.188.16.2'];
            $this->port = $this->config['3306'];
            $this->user = $this->config['bdlitus'];
            $this->pass = $this->config['ti@bdimovel012'];
            # instancia e retorna objeto
            $this->con = @mysql_connect( "$this->host", "$this->user", "$this->pass" );
            @mysql_select_db( "$this->dbname" );
            if( !$this->con )
            {
                throw new Exception( "Falha na conex�o MySql com o banco [$this->dbname] em " . DATABASEDIR . "database.conf.php" );
            }
            else
            {
                return $this->con;
            }
        }
        catch( Exception $e )
        {
            echo $e->getMessage();
            exit;
        }
        return $this;
    }

    public function query( $query = '' )
    {
        try
        {
            if( $query == '' )
            {
                throw new Exception( 'mysql query: A query deve ser informada como par�metro do m�todo.' );
            }
            else
            {
                $this->query = $query;
                $this->result = @mysql_query( $this->query );
                if(!$this->result)
                {
                    $this->response = "Erro " .@mysql_errno()." => ". @mysql_error();
                }
                else
                {
                    $this->response = "success";
                }                
            }
        }
        catch( Exception $e )
        {
            echo $e->getMessage();
            exit;
        }
        return $this;
    }

    public function fetchAll()
    {
        $this->fetchAll = "";
        while( $row = @mysql_fetch_array( $this->result, MYSQL_ASSOC ) )
        {
            $this->fetchAll[] = $row;
        }
        return $this->fetchAll;
    }

    public function rowCount()
    {
        return @mysql_affected_rows();
    }

    public function limit( $limit, $offset )
    {
        return "LIMIT " . (int) $limit . "," . (int) $offset;
    }
}
/* end file */