# Spanish league football club!

Empezamos con un pequeño análisis, tomando nota de ciertos puntos y requerimientos.
Vamos a por ello.
## Feature
Area donde mostrar todos los fixtures e información de resultados.
## Proveedor de datos externo:
Brindará via HTTPS la información: durante el juego y actualizaciones varias frecuentemente.
La información estará en formato JSON
Proveerá 2 conjunto de datos que proveerá:
### Fixtures Feed
Lista de los fixtures en los cuales el club está tomando parte. Aqui nos detenemos, al no disponer de un JSON de ejemplo tenemos que montar uno con las características que nos han brindado para ir armando la idea de lo que se necesita:
```json
{
	"1": {
        "teams": {
            "1": [{"id": 1, "name": "Club A"}],
            "2": [{"id": 2, "name": "Club B"}]
        },
        "location": "City A",
        "datetime" : "2019-03-01 21:00:00+01:00",
        "status": "finalized",
        "result": [3,0]
    }, 
	"2": {
        "teams": {
            "1": [{"id": 3, "name": "Club C"}],
            "2": [{"id": 4, "name": "Club D"}]
        },
        "location": "City D",
        "datetime" : "2019-03-02 21:00:00+01:00",
        "status": "finalized",
        "result": [1,2]
    }, 
	"3": {
        "teams": {
            "1": [{"id": 1, "name": "Club A"}],
            "2": [{"id": 3, "name": "Club C"}]
        },
        "location": "City C",
        "datetime" : "2019-03-03 21:00:00+01:00",
        "status": "finalized",
        "result": [1,1]
    }, 
	"4": {
        "teams": {
            "1": [{"id": 2, "name": "Club B"}],
            "2": [{"id": 4, "name": "Club D"}]
        },
        "location": "City B",
        "datetime" : "2019-03-20 21:00:00+01:00",
        "status": "progress",
        "result": [1,3]
    }
    
}
```
### Match Report Feed
Incluira informacion especifica de un fixture, dicha informaion sera actualizada frecuentemente cuando este en estado **progress**
Al igual que en el caso anterior nos detenemos para armar un JSON que nos ayude a avanzar.
```json
{
	"1": {
        "teams": {
            "team1:": [{"id": 1, "name": "Club A"}],
            "team2:": [{"id": 2, "name": "Club B"}]
        },
        "location": "City A",
        "datetime" : "2019-03-01 21:00:00+01:00",
        "status": "finalized",
        "result": [3,1],
        "players": {
            "team1": [
                {"id": 1, "name": "Jugador 1"},
                {"id": 2, "name": "Jugador 2"},
                {"id": 3, "name": "Jugador 3"},
                {"id": 4, "name": "Jugador 4"},
                {"id": 5, "name": "Jugador 5"},
                {"id": 6, "name": "Jugador 6"},
                {"id": 7, "name": "Jugador 7"},
                {"id": 8, "name": "Jugador 8"},
                {"id": 9, "name": "Jugador 9"},
                {"id": 10, "name": "Jugador 10"},
                {"id": 11, "name": "Jugador 11"},
            ],
            "team2" :[
                {"id": 12, "name": "Jugador 12"},
                {"id": 13, "name": "Jugador 13"},
                {"id": 14, "name": "Jugador 14"},
                {"id": 15, "name": "Jugador 15"},
                {"id": 16, "name": "Jugador 16"},
                {"id": 17, "name": "Jugador 17"},
                {"id": 18, "name": "Jugador 18"},
                {"id": 19, "name": "Jugador 19"},
                {"id": 20, "name": "Jugador 20"},
                {"id": 21, "name": "Jugador 21"},
                {"id": 22, "name": "Jugador 22"},
            ]
        },
        "goals": {
            "team1": {
                "1": {"id": 4, "name": "Jugador 4", "datetime": "2019-03-01 21:20:00+01:00"},
                "2": {"id": 5, "name": "Jugador 5", "datetime": "2019-03-01 21:30:00+01:00"},
                "3": {"id": 6, "name": "Jugador 6", "datetime": "2019-03-01 21:40:00+01:00"}
            },
            "team2": {
                "1": {"id": 15, "name": "Jugador 15", "datetime": "2019-03-01 21:25:00+01:00"},
                "2": {"id": 19, "name": "Jugador 19", "datetime": "2019-03-01 21:35:00+01:00"}
            },
              
        },
        "cards": {
            "team1": {
                "yellow": {
                    "1": {"id": 3, "name": "Jugador 3", "datetime": "2019-03-01     21:22:00+01:00"},    
                    "2": {"id": 8, "name": "Jugador 8", "datetime": "2019-03-01 21:27:00+01:00"}
                },
                "red": {
                    "1": {"id": 7, "name": "Jugador 7", "datetime": "2019-03-01 22:10:00+01:00"}
                }
            },
            "team2": {
                "yellow": {
                    "1": {"id": 13, "name": "Jugador 13", "datetime": "2019-03-01     21:22:00+01:00"},    
                    "2": {"id": 18, "name": "Jugador 18", "datetime": "2019-03-01 21:27:00+01:00"}
                },
                "red": {
                    "2": {"id": 22, "name": "Jugador 19", "datetime": "2019-03-01 22:25:00+01:00"}
                }
            },
              
        },
          
    }    
}
```

## Que debemos producir

Llegado a este punto tenemos que implementar el escenario con la información suministrada. Debemos facilitar:

- Parsing del JSON
- Creación de objectos que representen informacion normalizada.
- Logica de negocios para determinar si los objetos necesitan ser grabados o actualizados.
- Enviar notificaciones SMS cuando un gol es marcado via una llamada a un web services interno.

