export default async function downloadImage(url, id, folderPath = "/views/img/logos_ligas") {
    try {
        // Hacer la petición con fetch para obtener la imagen
        const response = await fetch(url);
        if (!response.ok) throw new Error(`Error al descargar la imagen: ${response.status}`);

        // Convertir la imagen en un Blob (datos binarios)
        const blob = await response.blob();

        // Crear una URL del blob en el navegador
        const blobUrl = URL.createObjectURL(blob);

        // Crear un enlace para forzar la descarga
        const a = document.createElement("a");
        a.href = blobUrl;
        a.download = `${id}.png`; // Nombre del archivo
        document.body.appendChild(a);
        a.click(); // Simular clic para descargar la imagen
        document.body.removeChild(a);
        URL.revokeObjectURL(blobUrl); // Limpiar la memoria

        console.log(`✅ Imagen descargada: ${id}.png`);
    } catch (error) {
        console.error("❌ Error al descargar la imagen:", error);
    }
}
