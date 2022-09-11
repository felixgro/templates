<x-layout-app>
   <h1>Template List</h1>

   @foreach ($templates as $template)
      <a href='{{ '/templates/' . $template->slug }}'>
         <iframe src="{{ '/templates/' . $template->slug }}" frameborder="0"></iframe>
      </a>
   @endforeach
</x-layout-app>
