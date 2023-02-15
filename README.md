# jela_svijeta

## Primjer rute
http://127.0.0.1:8000/api/dishes/archive?per_page=1&diff_time=11:00:00&page=2&with=ingredients,tags
{
    "data": [
        {
            "id": 10,
            "title": "Sit illum eos.",
            "description": "Sed maiores cum unde repellendus sequi. Et suscipit sint quia repellendus iure sapiente. Ut et velit commodi sed quidem necessitatibus. Impedit quo magnam labore ut molestias temporibus.",
            "status": "RESTORED",
            "tags": [
                {
                    "id": 8,
                    "title": "hic",
                    "slug": "hic"
                }
            ],
            "ingredients": [
                {
                    "id": 18,
                    "title": "fugiat",
                    "slug": "fugiat",
                    "amount": 53.6,
                    "typeAmount": "dkg"
                },
                {
                    "id": 14,
                    "title": "quidem",
                    "slug": "quidem",
                    "amount": null,
                    "typeAmount": null
                },
                {
                    "id": 16,
                    "title": "quia",
                    "slug": "quia",
                    "amount": 37.9,
                    "typeAmount": "dkg"
                }
            ]
        }
    ],
    "links": {
        "first": "http://127.0.0.1:8000/api/dishes/archive?page=1",
        "last": "http://127.0.0.1:8000/api/dishes/archive?page=6",
        "prev": "http://127.0.0.1:8000/api/dishes/archive?page=1",
        "next": "http://127.0.0.1:8000/api/dishes/archive?page=3"
    },
    "meta": {
        "current_page": 2,
        "from": 2,
        "last_page": 6,
        "links": [ ...
        ],
        "path": "http://127.0.0.1:8000/api/dishes/archive",
        "per_page": 1,
        "to": 2,
        "total": 6
    }
}

## Popis ruta i funkcionalnosti
Get
1. /api/dishes  ->  index -> vraca samo jela koja nisu pobrisana
2. /api/dishes/search/{title} ->  search ->  pretrazivanje po title, samo nad ne izbrisanim jelima
3. /api/dishes/archive  -> archive  -> sve vraca dakle i izbrisane podatke, jedino ovaj route ima diff_time za sad !!!
4. /api/dishes/{id}  ->  show  -> vraca jela po id
Post
5. /api/dishes  ->  store  ->  sprema podatke o jelu (samo o jelu)
6. /api/dishes/{id}/restore  ->  restore  ->  vraca izbrisane podatke
Put
7. /api/dishes/{id}  ->  update  ->  updatea podatke o jelu (samo o jelu)
Delete
8. /api/dishes/{id}  ->  delete  -> softDelete podataka
9. /api/dishes/{id}/force_delete  ->  forceDelete  ->  u potpunosti brise podatke

## Objasnjenje
Rjesenje zadatka je pod rutom 3. /api/dishes/archive, ostale dodatne stvari sam napravila samo za vjezbu usput

Jezike cu uskoro rjesit samo ce mi duze trebat jer prvi put mi je bilo jako tesko naci materijale sa detaljnijim uputama i tako.

## Voljela bih dobiti komentare o tome sto bi moglo biti bolje napravljeno, hvala!
