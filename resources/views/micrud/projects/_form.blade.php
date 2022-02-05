@csrf
<label for="title">Título del proyecto</label><br>
<input type="text" name="title" value="{{ old('title', $project->title) }}"><br>
<label for="url">URL del proyecto</label><br>
<input type="text" name="url" value="{{ old('url', $project->url) }}"><br>
<label for="description">Descripción del proyecto</label><br>
<textarea name="description">{{ old('description', $project->description) }}</textarea><br>
<button>{{ $btnText }}</button>