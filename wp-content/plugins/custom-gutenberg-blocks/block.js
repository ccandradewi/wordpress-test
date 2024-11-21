const { registerBlockType } = wp.blocks;
const { MediaUpload, BlockControls } = wp.editor;
const { Button } = wp.components;

registerBlockType("custom/image-content", {
  title: "Image & Content",
  icon: "format-image",
  category: "common", // Kamu bisa menambahkan kategori lain jika ingin
  attributes: {
    imageURL: {
      type: "string",
      default: "",
    },
    content: {
      type: "string",
      default: "",
    },
  },

  edit: (props) => {
    const { attributes, setAttributes } = props;
    const { imageURL, content } = attributes;

    return (
      <div className="image-content-block">
        <BlockControls>
          {/* Kamu bisa menambahkan kontrol di sini */}
        </BlockControls>
        <div className="image-upload">
          <MediaUpload
            onSelect={(media) => setAttributes({ imageURL: media.url })}
            type="image"
            value={imageURL}
            render={({ open }) => (
              <Button onClick={open}>
                {imageURL ? (
                  <img src={imageURL} alt="Selected image" />
                ) : (
                  "Upload Image"
                )}
              </Button>
            )}
          />
        </div>
        <textarea
          placeholder="Add your content here..."
          value={content}
          onChange={(e) => setAttributes({ content: e.target.value })}
        />
      </div>
    );
  },

  save: (props) => {
    const { attributes } = props;
    const { imageURL, content } = attributes;

    return (
      <div className="image-content-block">
        {imageURL && <img src={imageURL} alt="Selected image" />}
        <p>{content}</p>
      </div>
    );
  },
});
