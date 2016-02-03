<?
//Library Developed by and belongs to Kgantsi Rabatseta 
//This class Uses PDO to connect to the database

	class DataSourceConnection {
		
			private $ServerType;//MySQL, MSSQL,
			private $SqlServerName;
			private $SqlUserName;
			private $SqlPassword;
			private $SqlDatabase;
			
			private $ConnectionString;
			
			private $SqlConnection;
		
			function __construct(string $serverType,string $sqlServerName,string $sqlDatabaseName,string $sqlUserName,string $sqlPassword) {
				$this-> ServerType = strtoupper($serverType);
				$this-> SqlServerName = strtoupper($sqlServerName);
				$this-> SqlDatabase = $sqlDatabaseName;
				$this-> SqlUserName=$sqlUserName;
				$this->SqlPassword=$sqlPassword;
				BuildConnectionString();
			}
			
			private function BuildConnectionString()
			{
				$this->ConnectionString = sprintf(
					"%s:host=%s;dbname=%s",$this->ServerType,$this->SqlServerName,$this->SqlDatabase
				);
			}
			
			public function InsertQuery(string $insertStatement){
				return ExecuteInsertUpdateQuery($insertStatement);
			}
			
			public function UpdateQuery(string $updateStatement){
				return ExecuteInsertUpdateQuery($updateStatement);
			}
			
			public function SelectQuery(string $selectStatement){
				return ExecuteSelectQuery($selectStatement);
			}
			
			
			
			private function OpenConnection(){
				$this->SqlConnection =
					strtoupper($this-> ServerType)=="MYSQL"
					? new PDO($this->ConnectionString,$this->SqlUserName,$this->SqlPassword):
					new PDO($this->ConnectionString.','.$this->SqlUserName.','.$this->SqlPassword);			
			}
			
			private function CloseConnection(){
				$this->SqlConnection=NULL;
			}
			
			
			private function ExecuteInsertUpdateQuery(string $CUStatement){
				try{
						OpenConnection();
						$this->SqlConnection-> se?tAt?tri?but?e(P?DO:?:AT?TR_?ERR?MODE, PDO::E?RRM?ODE?_EX?CEP?TION);
						$statement = $this-> SqlConnection->prepare($CUStatement);
						$statement-> execute();
						
						return $statement -> rowCount()>0;
					}
					catch(PDOException $exception){
						 echo "alert('ERROR:  ". $e->ge?tMe?ssa?ge."');";
						 echo 'ERROR: ' . $e->ge?tMe?ssa?ge;
						return FALSE;
					}
					finally{
						CloseConnection();
					}
				}
			}
			
			private function ExecuteSelectQuery($RStatement){
				try{
						OpenConnection();
						$this->SqlConnection-> se?tAt?tri?but?e(P?DO:?:AT?TR_?ERR?MODE, PDO::E?RRM?ODE?_EX?CEP?TION);
						$statement = $this-> SqlConnection->prepare($RStatement);
						$statement-> execute();
						
						
						
						$resultSet = $statement -> fetchAll();
						if(!count($resultSet))
							echo "alert('INFORMATION: No Rows Returned');";
							
						return $resultSet;
					}
					catch(PDOException $exception){
						 echo "alert('ERROR:  ". $e->ge?tMe?ssa?ge."');";
						 echo 'ERROR: ' . $e->ge?tMe?ssa?ge;
						return NULL;
					}
					finally{
						CloseConnection();
					}
			}
			
		
	}
?>