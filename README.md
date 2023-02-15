# jela_svijeta

## Primjer rute
http://127.0.0.1:8000/api/dishes/archive?per_page=1&diff_time=11:00:00&page=6&with=ingredients,tags,category

```json
{
    "data": [
        {
            "id": 15,
            "title": "Placeat soluta.",
            "description": "Quos nesciunt suscipit est nulla iusto quia. Eos quibusdam consequatur labore quia. Impedit deleniti ea corporis laboriosam sunt repudiandae eum ratione. Eaque ad culpa et saepe ut esse.",
            "status": "DELETED",
            "category": {
                "id": 5,
                "title": "veniam",
                "slug": "veniam"
            },
            "tags": [
                {
                    "id": 5,
                    "title": "deserunt",
                    "slug": "deserunt"
                }
            ],
            "ingredients": [
                {
                    "id": 2,
                    "title": "nostrum",
                    "slug": "nostrum",
                    "amount": 11.7,
                    "typeAmount": "dcl"
                },
                {
                    "id": 1,
                    "title": "tempora",
                    "slug": "tempora",
                    "amount": 5,
                    "typeAmount": "per_piece"
                },
                {
                    "id": 3,
                    "title": "deleniti",
                    "slug": "deleniti",
                    "amount": 74.9,
                    "typeAmount": "dkg"
                }
            ]
        }
    ],
    "links": {
        "first": "http://127.0.0.1:8000/api/dishes/archive?page=1",
        "last": "http://127.0.0.1:8000/api/dishes/archive?page=6",
        "prev": "http://127.0.0.1:8000/api/dishes/archive?page=5",
        "next": null
    },
    "meta": {
        "current_page": 6,
        "from": 6,
        "last_page": 6,
        "links": [
            {
                "url": "http://127.0.0.1:8000/api/dishes/archive?page=5",
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/dishes/archive?page=1",
                "label": "1",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/dishes/archive?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/dishes/archive?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/dishes/archive?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/dishes/archive?page=5",
                "label": "5",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/dishes/archive?page=6",
                "label": "6",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://127.0.0.1:8000/api/dishes/archive",
        "per_page": 1,
        "to": 6,
        "total": 6
    }
}
```

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
Rjesenje zadatka je pod rutom 3. /api/dishes/archive, ostale dodatne stvari sam napravila samo za vjezbu usput.

Jezike cu uskoro rijesiti samo ce mi duze trebat jer prvi put mi je bilo jako tesko naci materijale sa detaljnijim uputama i tako.

### Voljela bih dobiti komentare o tome sto bi moglo biti bolje napravljeno, hvala!
