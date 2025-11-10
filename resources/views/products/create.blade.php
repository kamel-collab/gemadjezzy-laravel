<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Nouveau produit</title>
    <style>
        body { font-family: sans-serif; max-width: 720px; margin: 24px auto; }
        .alert { padding: 10px; border-radius: 6px; margin-bottom: 16px; }
        .alert-success { background: #e6ffed; border: 1px solid #b5f3c7; }
        .alert-error { background: #ffecec; border: 1px solid #f5b5b5; }
        .field { margin-bottom: 12px; }
        label { display:block; font-weight: 600; margin-bottom: 4px; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; }
        small.error { color: #b00020; display:block; margin-top: 4px; }
        button { padding: 10px 16px; border: 0; border-radius: 6px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>Ajouter un produit</h1>

    {{-- ✅ Message de succès (flash) après redirection depuis store() --}}
 

    {{-- ❌ Affichage global des erreurs --}}


    <form method="post" action="{{ route('products.store') }}" novalidate>
        @csrf

        <div class="field">
            <label for="name">Nom du produit</label>
            <input id="name" name="name" type="text"  placeholder="Ex. Clavier mécanique">
         
        </div>

        <div class="field">
            <label for="price">Prix (€)</label>
            <input id="price" name="price" type="number" step="0.01" min="0"  placeholder="Ex. 89.99">
         
        </div>

        <div class="field">
            <label for="stock">Stock</label>
            <input id="stock" name="stock" type="number" step="1" min="0"  placeholder="Ex. 10">
         
        </div>

        <div class="field">
            <label for="category">Catégorie</label>
            <select id="category" name="category">
                <option value="">— Sélectionner —</option>
                @foreach (['informatique'=>'Informatique', 'accessoires'=>'Accessoires', 'logiciels'=>'Logiciels', 'autre'=>'Autre'] as $val => $lib)
                    <option value="{{ $val }}" >{{ $lib }}</option>
                @endforeach
            </select>
           
        </div>

        <button type="submit">Ajouter le produit</button>
    </form>

 
</body>
</html>
