
SELECT
    brand.brand AS "Brands",
    color.color AS "Colors",
    fabric_type.weave AS "Weaves",
    fabric_type.fiber AS "Fibers",
    images.name AS "Image Name",
    images.file_dir AS "File Directory",
    notion_type.type AS "Notion Types",
    size AS "Sizes",
    STATUS AS "Status",
    style AS "Style",
    tools.tool AS "Tools",
    trim_type.type AS "Trim Types"
FROM
    brand,
    color,
    fabric_type,
    images,
    notion_type,
    size,
    status,
    style,
    tools,
    trim_type

WHERE  
patterns.bid = brand.bid
    AND


    AND

    AND
    patterns.stid = style.stid
    AND
    patterns.sid = size.sid
